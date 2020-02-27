<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilisateur;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Utilisateur::class);

        $utilisateurs = $repo->findAll();

        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'utilisateurs' => $utilisateurs
        ]);
    }
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
     * @Route("/signIn", name="signIn")
     */
    public function signIn()
    {
      return $this->render('test/signIn.html.twig');
    }
    /**
     * @Route("/signUp", name="signUp")
     */
    public function signUp()
    {
      return $this->render('test/signUp.html.twig');
    }
}
