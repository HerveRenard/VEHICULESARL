<?php

namespace App\Entity;

use App\Repository\VehiculeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VehiculeRepository::class)
 */
class Vehicule
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $numChassis;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateA;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $energy;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $matricule;

    /**
     * @ORM\Column(type="integer")
     */
    private $prixJr;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbPorte;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbPasger;

    /**
     * @ORM\Column(type="boolean")
     */
    private $gps;

    /**
     * @ORM\Column(type="boolean")
     */
    private $aps;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $couleur;

    /**
     * @ORM\Column(type="boolean")
     */
    private $antiderap;

    /**
     * @ORM\Column(type="boolean")
     */
    private $airbag;

    /**
     * @ORM\Column(type="boolean")
     */
    private $alarm;

    /**
     * @ORM\Column(type="integer")
     */
    private $km;

    /**
     * @ORM\Column(type="boolean")
     */
    private $clim;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $etat;

    /**
     * @ORM\Column(type="integer")
     */
    private $lvlCarbu;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumChassis(): ?string
    {
        return $this->numChassis;
    }

    public function setNumChassis(string $numChassis): self
    {
        $this->numChassis = $numChassis;

        return $this;
    }

    public function getDateA(): ?\DateTimeInterface
    {
        return $this->dateA;
    }

    public function setDateA(\DateTimeInterface $dateA): self
    {
        $this->dateA = $dateA;

        return $this;
    }

    public function getEnergie(): ?string
    {
        return $this->energy;
    }

    public function setEnergie(string $energy): self
    {
        $this->energy = $energy;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getPrixJr(): ?int
    {
        return $this->prixJr;
    }

    public function setPrixJr(int $prixJr): self
    {
        $this->prixJr = $prixJr;

        return $this;
    }

    public function getNbPorte(): ?int
    {
        return $this->nbPorte;
    }

    public function setNbPorte(int $nbPorte): self
    {
        $this->nbPorte = $nbPorte;

        return $this;
    }

    public function getNbPasger(): ?int
    {
        return $this->nbPasger;
    }

    public function setNbPasger(int $nbPasger): self
    {
        $this->nbPasger = $nbPasger;

        return $this;
    }

    public function isGps(): ?bool
    {
        return $this->gps;
    }

    public function setGps(bool $gps): self
    {
        $this->gps = $gps;

        return $this;
    }

    public function isAps(): ?bool
    {
        return $this->aps;
    }

    public function setAps(bool $aps): self
    {
        $this->aps = $aps;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function isAntiderap(): ?bool
    {
        return $this->antiderap;
    }

    public function setAntiderap(bool $antiderap): self
    {
        $this->antiderap = $antiderap;

        return $this;
    }

    public function isAirbag(): ?bool
    {
        return $this->airbag;
    }

    public function setAirbag(bool $airbag): self
    {
        $this->airbag = $airbag;

        return $this;
    }

    public function isAlarm(): ?bool
    {
        return $this->alarm;
    }

    public function setAlarm(bool $alarm): self
    {
        $this->alarm = $alarm;

        return $this;
    }

    public function getKm(): ?int
    {
        return $this->km;
    }

    public function setKm(int $km): self
    {
        $this->km = $km;

        return $this;
    }

    public function isClim(): ?bool
    {
        return $this->clim;
    }

    public function setClim(bool $clim): self
    {
        $this->clim = $clim;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getLvlCarbu(): ?int
    {
        return $this->lvlCarbu;
    }

    public function setLvlCarbu(int $lvlCarbu): self
    {
        $this->lvlCarbu = $lvlCarbu;

        return $this;
    }
}
