<?php

namespace App\Entity;

use App\Repository\AssuranceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AssuranceRepository::class)
 */
class Assurance
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="array")
     */
    private $libelle = [];

    /**
     * @ORM\Column(type="array")
     */
    private $prix = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getlibelle(): ?array
    {
        return $this->libelle;
    }

    public function setlibelle(array $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getprix(): ?array
    {
        return $this->prix;
    }

    public function setprix(array $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

}
