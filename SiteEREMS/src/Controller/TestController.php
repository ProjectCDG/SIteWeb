<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Utilisateur;
use App\Entity\Piece;
use App\Entity\Mesure;
use App\Form\SignUp;


class TestController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
      return $this->render('test/home.html.twig', [
          'age'=> 15
      ]);
    }

    /**
     * @Route("/piece", name="piece_page")
     */
    public function piece()
    {
        $repo = $this->getDoctrine()->getRepository(Piece::class);
        $pieces = new Piece();
        $pieces->setDateProduction(new \DateTime());
        $pieces = $repo->findAll();


        return $this->render('test/piece.html.twig', [
            'controller_name' => 'TestController',
            'pieces' => $pieces
        ]);
    }
    /**
     * @Route("/mesure", name="mesure_page")
     */
    public function mesure()
    {
      $repo = $this->getDoctrine()->getRepository(Mesure::class);
      $mesures = new Mesure();
      $mesures->setDateMesure(new \DateTime());
      $mesures = $repo->findAll();

      return $this->render('test/mesure.html.twig',['mesures' => $mesures]);

    }





}
