<?php

namespace App\Entity;

use App\Repository\InscriptionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InscriptionRepository::class)]
class Inscription
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $codeBadge = null;

    #[ORM\Column(length: 255)]
    private ?string $debutValidite = null;

    #[ORM\Column(length: 255)]
    private ?string $finValidite = null;

    #[ORM\ManyToOne(inversedBy: 'sesInscriptions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Visiteur $sonVisiteur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeBadge(): ?string
    {
        return $this->codeBadge;
    }

    public function setCodeBadge(string $codeBadge): static
    {
        $this->codeBadge = $codeBadge;

        return $this;
    }

    public function getDebutValidite(): ?string
    {
        return $this->debutValidite;
    }

    public function setDebutValidite(string $debutValidite): static
    {
        $this->debutValidite = $debutValidite;

        return $this;
    }

    public function getFinValidite(): ?string
    {
        return $this->finValidite;
    }

    public function setFinValidite(string $finValidite): static
    {
        $this->finValidite = $finValidite;

        return $this;
    }

    public function getSonVisiteur(): ?Visiteur
    {
        return $this->sonVisiteur;
    }

    public function setSonVisiteur(?Visiteur $sonVisiteur): static
    {
        $this->sonVisiteur = $sonVisiteur;

        return $this;
    }
}
