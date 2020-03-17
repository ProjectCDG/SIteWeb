<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MesureRepository")
 */
class Mesure
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
    private $idenRaspberry;

    /**
     * @ORM\Column(type="string")
     * @ORM\OneToOne(targetEntity=Piece::class)
     */
    private $idenPiece;

    /**
     * @ORM\Column(type="float")
     */
    private $cdgmesurer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateMesure;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdenRaspberry(): ?string
    {
        return $this->idenRaspberry;
    }

    public function setIdenRaspberry(string $idenRaspberry): self
    {
        $this->idenRaspberry = $idenRaspberry;

        return $this;
    }

    public function getidenPiece(): ?string
    {
        return $this->idenPiece;
    }

    public function setidenPiece(string $idenPiece): self
    {
        $this->idenPiece = $idenPiece;

        return $this;
    }

    public function getCdgmesurer(): ?float
    {
        return $this->cdgmesurer;
    }

    public function setCdgmesurer(float $cdgmesurer): self
    {
        $this->cdgmesurer = $cdgmesurer;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getDateMesure(): ?\DateTimeInterface
    {
        return $this->dateMesure;
    }

    public function setDateMesure(\DateTimeInterface $dateMesure): self
    {
        $this->dateMesure = $dateMesure;

        return $this;
    }
}
