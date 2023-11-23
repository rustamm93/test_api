<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Post;
use App\Controller\OdamCreateAction;
use App\Repository\OdamRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: OdamRepository::class)]
#[ApiResource(
    operations: [
        new Post(
            uriTemplate: '/odam/create',
            controller: OdamCreateAction::class,
            name: 'odam',
        ),
        new GetCollection(),
        new Get(),
        new Delete()
    ]
)]
class Odam
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $ism = null;

    #[ORM\Column(length: 255)]
    private ?string $familiya = null;

    #[ORM\Column]
    private ?int $yosh = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsm(): ?string
    {
        return $this->ism;
    }

    public function setIsm(string $ism): static
    {
        $this->ism = $ism;

        return $this;
    }

    public function getFamiliya(): ?string
    {
        return $this->familiya;
    }

    public function setFamiliya(string $familiya): static
    {
        $this->familiya = $familiya;

        return $this;
    }

    public function getYosh(): ?int
    {
        return $this->yosh;
    }

    public function setYosh(int $yosh): static
    {
        $this->yosh = $yosh;

        return $this;
    }
}
