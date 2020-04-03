<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Doctrine\Persistence\ObjectManager;
use App\Entity\Utilisateur;
use App\Form\SignUpType;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class SecurityController extends AbstractController
{
  /**
   * @Route("/user", name="user_page")
   */
  public function index()
  {
      $repo = $this->getDoctrine()->getRepository(Utilisateur::class);

      $utilisateurs = $repo->findAll();

      return $this->render('test/users.html.twig', [
          'controller_name' => 'TestController',
          'utilisateurs' => $utilisateurs
      ]);
  }
  /**
   * @Route("/signUp", name="signUp")
   */
  public function signUp(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoders)
  {
    dump($request);

    $utilisateurs = new Utilisateur();

    $form = $this->createForm(SignUpType::class ,$utilisateurs);

    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
      $utilisateurs->setRegisterDate(new \DateTime());

      //encodage du mot de passe
      $hash = $encoders->encodePassword($utilisateurs, $utilisateurs->getPassword());
      $utilisateurs->setPassword($hash);

      $manager->persist($utilisateurs);
      $manager->flush();

      return $this->redirectToRoute('app_login');
    }

    return $this->render('security/signUp.html.twig', [
          'formUtilisateurs' => $form->createView()
    ]);
  }

  /**
   * @Route("/login", name="app_login")
   */
  public function login(AuthenticationUtils $authenticationUtils): Response
  {
      // if ($this->getUser()) {
      //     return $this->redirectToRoute('target_path');
      // }

      // get the login error if there is one
      $error = $authenticationUtils->getLastAuthenticationError();
      // last username entered by the user
      $lastUsername = $authenticationUtils->getLastUsername();

      return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
  }

  /**
   * @Route("/logout", name="app_logout")
   */
  public function logout()
  {
      throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
      return $this->redirectToRoute('app_login');
  }
}
