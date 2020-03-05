<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Utilisateur;
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
     * @Route("/signIn", name="signIn")
     */
    public function signIn()
    {
      return $this->render('test/signIn.html.twig');
    }


    /**
     * @Route("/signUp/new", name="user_create")
     */
    public function create()
    {
      return $this->render('test/user_create.html.twig');
    }

}
