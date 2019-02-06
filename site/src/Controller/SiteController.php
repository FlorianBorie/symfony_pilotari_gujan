<?php

namespace App\Controller;

use App\Entity\Profil;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    /**
     * @Route("/site", name="site")
     */
    public function index()
    {
        return $this->render('site/index.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render(('site/home.html.twig'));
    }

    /**
     * @Route("/evenement", name="evenement")
     */
    public function evenement()
    {
        return $this->render('site/evenement.html.twig');
    }

    /**
     * @Route("/competition", name="competition")
     */

    public function competion()
    {
        return $this->render('site/competition.html.twig');
    }

    /**
     * @Route("/sponsor", name="sponsor")
     */

    public function sponsor()
    {
        return $this->render('site/sponsor.html.twig');
    }

    /**
     * @Route("/newsletter", name="newsletter")
     */

    public function newsletter()
    {
        return $this->render('site/newsletter.html.twig');
    }

    /**
     * @Route("/connexion", name="connexion")
     */

    public function connexion()
    {
        return $this->render('site/connexion.html.twig');
    }

    /**
     * @Route("/inscription", name="inscription")
     * @param Request $request
     * @param ObjectManager $manager
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function inscription(Request $request, ObjectManager $manager)
    {
        $profil = new Profil();

        $form = $this->createFormBuilder($profil)
            ->add('nom')
            ->add('prenom')
            ->add('mail', EmailType::class)
            ->add('password')

            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $manager->persist($profil);
            $manager->flush();

            return $this->redirectToRoute('attente.html.twig',);
        }




        return $this->render('site/inscription.html.twig',[
            'formProfil' => $form->createView()
        ]);
    }

    /**
     * @Route("/contacter", name="contacter")
     */

    public function contacter(){
        return $this->render('site/contacter.html.twig');
    }


}
