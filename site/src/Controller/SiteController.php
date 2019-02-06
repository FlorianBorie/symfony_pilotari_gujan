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
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\Contacter;

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
     * @Route("/inscription/{id}/edit", name="inscription_edit")
     * @param Profil $profil
     * @param Request $request
     * @param ObjectManager $manager
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function form(Profil $profil = null, Request $request, ObjectManager $manager)
    {

        if(!$profil) {
            $profil = new Profil();
        }

        $form = $this->createFormBuilder($profil)
            ->add('nom')
            ->add('prenom')
            ->add('mail', EmailType::class)
            ->add('password')

            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            if(!$profil->getId()){

            }
            $manager->persist($profil);
            $manager->flush();

            return $this->redirectToRoute('attente.html.twig', ['id' => $profil->getId()]);
        }




        return $this->render('site/inscription.html.twig',[
            'formProfil' => $form->createView(),
            'editMode' => $profil->getId() !== null
        ]);
    }

    /**
     * @Route("/contacter", name="contacter")
     */

    public function contacter(Request $request, ObjectManager $manager){
        $contacter = new Contacter();

        $form = $this->createFormBuilder($contacter)
            ->add('nom')
            ->add('mail')
            ->add('objet')
            ->add('message')
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

        }

        return $this->render('site/contacter.html.twig',[
            'formContacter' => $form->createView()
        ]);
    }
    /**
     * @Route("/attente", name="attente")
     */

    public function attente(){
        return $this->render('site/attente.html.twig');
    }


}
