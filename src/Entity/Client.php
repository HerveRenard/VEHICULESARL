<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $nomCli;

    /**
     * @ORM\Column(type="string", length=65)
     */
    private $prenCli;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $telCli;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $matCli;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $emailCli;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $numPerm;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $pieceIdentity;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $commune;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $quartier;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $civility;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateDN;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCli(): ?string
    {
        return $this->nomCli;
    }

    public function setNomCli(string $nomCli): self
    {
        $this->nomCli = $nomCli;

        return $this;
    }

    public function getPrenCli(): ?string
    {
        return $this->prenCli;
    }

    public function setPrenCli(string $prenCli): self
    {
        $this->prenCli = $prenCli;

        return $this;
    }

    public function getTelCli(): ?string
    {
        return $this->telCli;
    }

    public function setTelCli(string $telCli): self
    {
        $this->telCli = $telCli;

        return $this;
    }

    public function getMatCli(): ?string
    {
        return $this->matCli;
    }

    public function setMatCli(string $matCli): self
    {
        $this->matCli = $matCli;

        return $this;
    }

    public function getEmailCli(): ?string
    {
        return $this->emailCli;
    }

    public function setEmailCli(string $emailCli): self
    {
        $this->emailCli = $emailCli;

        return $this;
    }

    public function getNumPerm(): ?string
    {
        return $this->numPerm;
    }

    public function setNumPerm(string $numPerm): self
    {
        $this->numPerm = $numPerm;

        return $this;
    }

    public function getPieceIdentity(): ?string
    {
        return $this->pieceIdentity;
    }

    public function setPieceIdentity(string $pieceIdentity): self
    {
        $this->pieceIdentity = $pieceIdentity;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCommune(): ?string
    {
        return $this->commune;
    }

    public function setCommune(string $commune): self
    {
        $this->commune = $commune;

        return $this;
    }

    public function getQuartier(): ?string
    {
        return $this->quartier;
    }

    public function setQuartier(string $quartier): self
    {
        $this->quartier = $quartier;

        return $this;
    }

    public function getCivility(): ?string
    {
        return $this->civility;
    }

    public function setCivility(string $civility): self
    {
        $this->civility = $civility;

        return $this;
    }

    public function getDateDN(): ?\DateTimeInterface
    {
        return $this->dateDN;
    }

    public function setDateDN(\DateTimeInterface $dateDN): self
    {
        $this->dateDN = $dateDN;

        return $this;
    }
}
