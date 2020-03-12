<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 *@UniqueEntity(
 *  fields= {"email"},
 *  message= "email must be unique"
 *)
 */
class Utilisateur implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60)1
     * @Assert\Length(min=3, max=255)
     */
    private $first_name;

    /**
     * @ORM\Column(type="string", length=60)
     * @Assert\Length(min=3, max=255)

     */
    private $last_name;
    /**
     * @ORM\Column(type="string", length=60)
     * @Assert\Length(min=5, max=255)

     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="8", minMessage = "8 characters minimum")
     *
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

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

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

    public function eraseCredentials()
    {

    }
    public function getSalt()
    {

    }
    public function getRoles()
    {
      return ['ROLE_USER'];
    }
}
