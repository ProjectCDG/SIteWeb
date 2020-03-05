<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 */
class Utilisateur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60)1
     * @Assert\Length(min=10, max=255)
     */
    private $first_name;

    /**
     * @ORM\Column(type="string", length=60)
     * @Assert\Length(min=10, max=255)

     */
    private $last_name;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="8", minMessage = "8 characters minimum")
     * @Assert\EqualTo(propertyPath="confirm_password", message = "your password must be the same as confirm password")
     */
    private $password;

    /**
     * @ORM\Column(type="datetime")
     */
    private $register_date;

    /**
    * @Assert\EqualTo(propertyPath="password", message = "your password should not be different")
    */
    public $confirm_password;

    public function getConfirmPassword(): ?string
    {
        return $this->confirm_password;
    }

    public function setConfirmPassword(): ?string
    {
      $this->confirm_password = $confirm_password;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserid(): ?int
    {
        return $this->userid;
    }

    public function setUserid(int $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRegisterDate(): ?\DateTimeInterface
    {
        return $this->register_date;
    }

    public function setRegisterDate(\DateTimeInterface $register_date): self
    {
        $this->register_date = $register_date;

        return $this;
    }
}
