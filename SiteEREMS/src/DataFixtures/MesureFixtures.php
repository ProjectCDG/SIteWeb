<?php


namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Mesure;
class MesureFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i =1;$i <= 10;$i++)
        {
          $mesure = new mesure();
          $mesure->setIdenRaspberry("identifiantRasp n°$i")
                  ->setidenPiece("identifiantPiece n°$i")
                  ->setCdgmesurer('10.0')
                  ->setUsername("username n°$i")
                  ->setDateMesure(new \DateTime());

          $manager->persist($mesure);
        }

        $manager->flush();
    }
}
