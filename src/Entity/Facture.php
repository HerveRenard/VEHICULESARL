<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FactureRepository::class)
 */
class Facture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @ORM\Column(type="integer")
     */
    private $remise;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $montantHt;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $montantTTC;

    /**
     * @ORM\Column(type="integer")
     */
    private $franchise;

    /**
     * @ORM\Column(type="integer")
     */
    private $caution;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $kmT;

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

    public function getRemise(): ?int
    {
        return $this->remise;
    }

    public function setRemise(int $remise): self
    {
        $this->remise = $remise;

        return $this;
    }

    public function getMontantHt(): ?int
    {
        return $this->montantHt;
    }

    public function setMontantHt(?int $montantHt): self
    {
        $this->montantHt = $montantHt;

        return $this;
    }

    public function getMontantTTC(): ?int
    {
        return $this->montantTTC;
    }

    public function setMontantTTC(?int $montantTTC): self
    {
        $this->montantTTC = $montantTTC;

        return $this;
    }

    public function getFranchise(): ?int
    {
        return $this->franchise;
    }

    public function setFranchise(int $franchise): self
    {
        $this->franchise = $franchise;

        return $this;
    }

    public function getCaution(): ?int
    {
        return $this->caution;
    }

    public function setCaution(int $caution): self
    {
        $this->caution = $caution;

        return $this;
    }

    public function getKmT(): ?int
    {
        return $this->kmT;
    }

    public function setKmT(?int $kmT): self
    {
        $this->kmT = $kmT;

        return $this;
    }
}
