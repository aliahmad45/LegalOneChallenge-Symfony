<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Log;

#[AsCommand(
    name: 'app:update-log',
    description: 'command',
)]
class UpdateLogCommand extends Command
{

    public function __construct(string $projectDir, EntityManagerInterface $emi)
    {
        $this->projectDir = $projectDir;
        $this->logRepositroy = $emi->getRepository(Log::class);
        $this->entityManager = $emi;

        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Update logs table: add update and delete logs
             command will be run after every minutes and add logs exist
             in log file.Whenever new logs added to file, it will then add 
             to database and remove from logs file');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {

        /**
         *  This function reads a file up to length number of bytes. Youare the one who gets to specify 
         * the length so you don’t have to worry about running out of memory
         * we read the large text file (1024*1024) 1MB at a time and it took 13 iterations to read the 
         * whole file. You can set the value of chunk_size to a reasonable value and read a very large file
         * without exhausting your memory. You could use this technique to read a 1GB file using just 1MB of memory 
         * in about 1024 iterations. You can also read even larger files and increase the chunk_size if you want to 
         * keep the number of iterations low
         *
         * after reading the file, will the chunck size from log file 
         */
        try {

            $this->entityManager->getConnection()->getConfiguration()->setSQLLogger(null);

            $inputFileName =  $this->projectDir . '/public/logs.log';

            $handle = fopen($inputFileName, "r");
            $chunk_size = 1024 * 1024;
            $iterations = 0;
            $insertRowsAtTime = 100;
            $strt = time();
            $totalRecords = 0;

            if ($handle) {
                while (!feof($handle)) {
                    $iterations++;
                    $chunk = fread($handle, $chunk_size);

                    // split the text by eol and make array
                    $splitStrArr = preg_split('/\r\n|\n\r|\r|\n/', $chunk);

                    /** preprocess the array  
                     * 1. read the data from array in chunks
                     * 2. preprocess it and save it into database
                     */

                    $logChunkArr = array_chunk($splitStrArr, $insertRowsAtTime);

                    if (count($logChunkArr)) {

                        foreach ($logChunkArr as $key => $val) {

                            // Use Doctrine batch processing to insert the records
                            $singleLogChunk = $this->preprocessLogs($val, $this->entityManager);

                            $totalRecords = $totalRecords + count($singleLogChunk);
                        }

                        $this->entityManager->flush();
                        $this->entityManager->clear();
                    }
                }

                /** remove all the contents from logs fine */
                file_put_contents($inputFileName, "");

                /** close the file handler */
                fclose($handle);
            }

            echo "Total time to insert the `$totalRecords` records in milliseconds: ";
            echo $end = time() - $strt;

            return Command::SUCCESS;
        } catch (\Throwable $th) {
            return Command::FAILURE;
        }
    }

    /**
     * process the a single chunk and save it into database 
     *
     * @param array $chunk 
     * @param object $entityManager 
     * 
     * @return array $singleLog
     */
    private function preprocessLogs($chunk, $entityManager)
    {

        $singleLog = [];
        foreach ($chunk as $k => $value) {
            if (strlen($value)) {

                $chunkExplode = explode('- -', $value);

                $serviceName =  $chunkExplode[0];

                /** if the service name empty then skip the record */
                if (!isset($serviceName) || $serviceName == '' || !isset($chunkExplode[1]) || !strlen($chunkExplode[1])) {
                    continue;
                }

                /** Separate the date & request type, status */
                $serviceOtherInfo =  explode("]", $chunkExplode[1]);

                /** check date string is set */
                $dateString =  $serviceOtherInfo[0];
                if (!strlen($dateString)) {
                    continue;
                }

                // remove the [ from date string, first is space and second is [
                $dateString =  substr($dateString, 2);
                $serviceDatetime = date("Y-m-d h:i:s A", strtotime($dateString));

                $date = new \DateTime($serviceDatetime);
                $serviceDatetime =  $date;

                // echo gettype($date);

                if (!isset($serviceOtherInfo[1])) {
                    continue;
                }
                /** Separte the request type and status */
                $serviceRequestInfo =  explode("\" ", $serviceOtherInfo[1]);

                $serviceRequestUri =  isset($serviceRequestInfo[0]) ? $serviceRequestInfo[0] : '';
                $serviceRequestStatus =  isset($serviceRequestInfo[1]) ? $serviceRequestInfo[1] : '';

                if (
                    !isset($serviceRequestUri) || !strlen($serviceRequestUri) ||
                    !isset($serviceRequestStatus) || $serviceRequestStatus == null || !strlen($serviceRequestStatus)
                ) {
                    continue;
                }

                $serviceRequestStatus = (int) $serviceRequestStatus;

                $log = new Log();
                $log->setServiceName($serviceName);
                $log->setServiceEndPoint($serviceRequestUri);
                $log->setServiceEndPointStatus($serviceRequestStatus);
                $log->setServiceDateTime($serviceDatetime);

                $entityManager->persist($log);

                array_push($singleLog, $log);
            }
        }

        $entityManager->flush();
        $entityManager->clear();

        return $singleLog;
    }
}
