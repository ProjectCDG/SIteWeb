<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PieceRepository")
 */
class Piece
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $idenPiece;

    /**
     * @ORM\Column(type="string")
     */
    private $nomPiece;

    /**
     * @ORM\Column(type="float")
     */
    private $cdg;

    /**
     * @ORM\Column(type="float")
     */
    private $poids;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateProduction;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdenPiece(): ?string
    {
        return $this->idenPiece;
    }

    public function setIdenPiece(string $idenPiece): self
    {
        $this->idenPiece = $idenPiece;

        return $this;
    }

    public function getNomPiece(): ?string
    {
        return $this->nomPiece;
    }

    public function setNomPiece(string $nomPiece): self
    {
        $this->nomPiece = $nomPiece;

        return $this;
    }

    public function getCdG(): ?float
    {
        return $this->cdg;
    }

    public function setCdG(float $cdg): self
    {
        $this->cdg = $cdg;

        return $this;
    }

    public function getPoids(): ?float
    {
        return $this->poids;
    }

    public function setPoids(float $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getDateProduction(): ?\DateTimeInterface
    {
        return $this->dateProduction;
    }

    public function setDateProduction(\DateTimeInterface $dateProduction): self
    {
        $this->dateProduction = $dateProduction;

        return $this;
    }
}
