<?php

namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Piece;
class PieceFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i =1;$i <= 10;$i++)
        {
          $piece = new Piece();
          $piece->setidenPiece("identifiantPiece n°$i")
                ->setidenMesure("mesure n°$i")
                ->setCdG('10.0')
                ->setPoids('10.0')
                ->setDateProduction(new \DateTime());

          $manager->persist($piece);
        }

        $manager->flush();
    }
}
