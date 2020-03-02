<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ObjectManager;
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
    public function signUp(Request $request, ObjectManager $manager)
    {
      dump($request);

      if($request->request->count() > 0){
        $utilisateurs = new Utilisateur();
        $utilisateurs->setFirstName($request->request->get('first_name'))
                     ->setLastName($request->request->get('last_name'))
                     ->setEmail($request->request->get('email'))
                     ->setPassword($request->request->get('password1'))
                     ->setRegisterDate(new \DateTime());

        $manager->persist($utilisateurs);
        $manager->flush();

        return $this->redirectToRoute('test');
      }
      return $this->render('test/signUp.html.twig');
    }
    /**
     * @Route("/signUp/new", name="user_create")
     */
    public function create()
    {
      return $this->render('test/user_create.html.twig');
    }

}
