<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
    public function home(){
        return $this->render(('site/home.html.twig'));
    }
    /**
     * @Route("/evenement", name="evenement")
     */
    public function evenement(){
        return $this->render('site/evenement.html.twig');
    }

    /**
     * @Route("/competition", name="competition")
     */

    public function competion(){
        return $this->render('site/competition.html.twig');
    }

    /**
     * @Route("/sponsor", name="sponsor")
     */

    public function sponsor(){
        return $this->render('site/sponsor.html.twig');
    }
    /**
     * @Route("/newsletter", name="newsletter")
     */

    public function newsletter(){
        return $this->render('site/newsletter.html.twig');
    }
    /**
     * @Route("/connexion", name="connexion")
     */

    public function connexion(){
        return $this->render('site/connexion.html.twig');
    }
    /**
     * @Route("/inscription", name="inscription")
     */

    public function inscription(){
        return $this->render('site/inscription.html.twig');
    }
}
