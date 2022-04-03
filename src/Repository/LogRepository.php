<?php

namespace App\Repository;

use App\Entity\Log;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Log|null find($id, $lockMode = null, $lockVersion = null)
 * @method Log|null findOneBy(array $criteria, array $orderBy = null)
 * @method Log[]    findAll()
 * @method Log[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Log::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Log $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Log $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Log[] Returns an array of Log objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /**
     * return the total logs 
     *
     * @param string $serviceName 
     * @param integer $statusCode 
     * @param date $startDate
     * @param date $endDate
     * 
     * @return int $result
     */

    public function countBySomeField($serviceName, $statusCode, $startDate, $endDate)
    {
        $result = $this->createQueryBuilder('l');
        if (isset($serviceName)) {
            $result =  $result->andWhere('l.serviceName = :val')
                ->setParameter('val', $serviceName);
        }
        if (isset($statusCode) && $statusCode > 0) {
            $result = $result->andWhere('l.serviceEndPointStatus = :val1')
                ->setParameter('val1', $statusCode);
        }
        if (isset($startDate)) {
            $result = $result->andWhere('l.serviceDateTime >= :val2')
                ->setParameter('val2', $startDate);
        }
        if (isset($endDate)) {
            $result = $result->andWhere('l.serviceDateTime <= :val3')
                ->setParameter('val3', $endDate);
        }

        return $result->select('count(l.id)')
            ->getQuery()
            //->getSQL();
            ->getSingleScalarResult();
    }


    /**
     * Delete all records from logs table
     * 
     * @return int
     */
    public function deleteAll(): int
    {
        $qb = $this->createQueryBuilder('t');

        $qb->delete();

        return $qb->getQuery()->getSingleScalarResult() ?? 0;
    }
}
