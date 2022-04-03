<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Log;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use OpenApi\Annotations as OA;

#[Route('/api', name: 'api_')]
class LogsController extends AbstractController
{
    private $logRepository;

    public function __construct(EntityManagerInterface $emi)
    {
        $this->logRepository = $emi->getRepository(Log::class);
    }

    #[Route('/count', name: 'app_logs_count', methods: "GET")]
    /** 
     * @OA\Response(
     *     response=200,
     *     description="Returns the total logs",
     *     @OA\JsonContent(
     *        type="array",
     *        @OA\Items(ref=@Model(type=Log::class, groups={"full"}))
     *     )
     * )
     * @OA\Parameter(
     *     name="serviceName",
     *     in="query",
     *     description="Name of the service",
     *     @OA\Schema(type="string")
     * )
     * @OA\Parameter(
     *     name="statusCode",
     *     in="query",
     *     description="http code of the service",
     *     @OA\Schema(type="integer")
     * )
     * @OA\Parameter(
     *     name="startDate",
     *     in="query",
     *     description="start Date for fitering",
     *     @OA\Schema(type="date")
     * )
     * 
     * @OA\Parameter(
     *     name="endDate",
     *     in="query",
     *     description="end Date for fitering",
     *     @OA\Schema(type="date")
     * )
     * @OA\Tag(name="Log")
     */
    public function countLogs(Request $request): Response
    {
        $serviceName = $request->query->get('serviceName');
        $statusCode = (int)$request->query->get('statusCode');
        $startDate = $request->query->get('startDate');
        $endDate = $request->query->get('endDate');

        $totalLogs = $this->logRepository->countBySomeField($serviceName, $statusCode, $startDate, $endDate);

        return $this->json([
            'counter' =>  $totalLogs,
        ]);
    }

    #[Route('/delete', name: 'app_logs_delete', methods: "GET")]
    /**
     * @OA\Response(
     *     response=200,
     *     description="Returns the total logs which are deleted",
     *     @OA\JsonContent(
     *        type="array",
     *        @OA\Items(ref=@Model(type=Log::class, groups={"full"}))
     *     )
     * )
     */ 
    public function truncateLogs(): Response
    {
        $deletedLogs = $this->logRepository->deleteAll();

        return $this->json([
            'deleted records' =>  $deletedLogs,
        ]);
    }
}
