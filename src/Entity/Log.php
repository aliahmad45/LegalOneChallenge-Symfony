<?php

namespace App\Entity;

use App\Repository\LogRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LogRepository::class)]
class Log
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $serviceName;

    #[ORM\Column(type: 'string', length: 255)]
    private $serviceEndPoint;

    #[ORM\Column(type: 'integer')]
    private $serviceEndPointStatus;

    #[ORM\Column(type: 'datetime')]
    private $serviceDateTime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }

    public function setServiceName(string $serviceName): self
    {
        $this->serviceName = $serviceName;

        return $this;
    }

    public function getServiceEndPoint(): ?string
    {
        return $this->serviceEndPoint;
    }

    public function setServiceEndPoint(string $serviceEndPoint): self
    {
        $this->serviceEndPoint = $serviceEndPoint;

        return $this;
    }

    public function getServiceEndPointStatus(): ?int
    {
        return $this->serviceEndPointStatus;
    }

    public function setServiceEndPointStatus(int $serviceEndPointStatus): self
    {
        $this->serviceEndPointStatus = $serviceEndPointStatus;

        return $this;
    }

    public function getServiceDateTime(): ?\DateTimeInterface
    {
        return $this->serviceDateTime;
    }

    public function setServiceDateTime(\DateTimeInterface $serviceDateTime): self
    {
        $this->serviceDateTime = $serviceDateTime;

        return $this;
    }
}
