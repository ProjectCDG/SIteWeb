<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Utilisateur;
use App\Form\UtilisateursType;

class TestController extends AbstractController
{
    /**
     * @Route("/user", name="user_page")
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
    public function signUp(Request $request, ObjectManager $manager)
    {
      dump($request);

      $utilisateurs = new Utilisateur();

      $form = $this->createForm(UtilisateursType::class ,$utilisateurs);

      $form->handleRequest($request);

      if($form->isSubmitted() && $form->isValid()){
        $utilisateurs->setRegisterDate(new \DateTime());

        $manager->persist($utilisateurs);
        $manager->flush();

        return $this->redirectToRoute('user_page');
      }

      return $this->render('test/signUp.html.twig', [
            'formUtilisateurs' => $form->createView()
      ]);
    }

    /**
     * @Route("/signUp/new", name="user_create")
     */
    public function create()
    {
      return $this->render('test/user_create.html.twig');
    }

}
