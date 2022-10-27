<?php

namespace App\Entity;

use App\Repository\TypeDeContratRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeDeContratRepository::class)
 */
class TypeDeContrat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $libelle;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $depart;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $retour;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbJour;

    /**
     * @ORM\Column(type="time")
     */
    private $heureR;

    /**
     * @ORM\Column(type="time")
     */
    private $heureD;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateR;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDepart(): ?\DateTimeInterface
    {
        return $this->depart;
    }

    public function setDepart(?\DateTimeInterface $depart): self
    {
        $this->depart = $depart;

        return $this;
    }

    public function getRetour(): ?\DateTimeInterface
    {
        return $this->retour;
    }

    public function setRetour(?\DateTimeInterface $retour): self
    {
        $this->retour = $retour;

        return $this;
    }

    public function getNbJour(): ?int
    {
        return $this->nbJour;
    }

    public function setNbJour(int $nbJour): self
    {
        $this->nbJour = $nbJour;

        return $this;
    }

    public function getHeureR(): ?\DateTimeInterface
    {
        return $this->heureR;
    }

    public function setHeureR(\DateTimeInterface $heureR): self
    {
        $this->heureR = $heureR;

        return $this;
    }

    public function getHeureD(): ?\DateTimeInterface
    {
        return $this->heureD;
    }

    public function setHeureD(\DateTimeInterface $heureD): self
    {
        $this->heureD = $heureD;

        return $this;
    }

    public function getDateR(): ?\DateTimeInterface
    {
        return $this->dateR;
    }

    public function setDateR(?\DateTimeInterface $dateR): self
    {
        $this->dateR = $dateR;

        return $this;
    }
}
