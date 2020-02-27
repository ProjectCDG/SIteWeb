<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Utilisateur;
class UtilisateurFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i =1;$i <= 10;$i++)
        {
          $utilisateur = new Utilisateur();
          $utilisateur->setFirstName("prénom n°$i")
                      ->setLastName("nom n°$i")
                      ->setEmail("mail n°$i")
                      ->setPassword("password n°$i")
                      ->setRegisterDate(new \DateTime());

          $manager->persist($utilisateur);
        }

        $manager->flush();
    }
}
