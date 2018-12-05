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
     * @Route("/sponsort", name="sponsort")
     */

    public function sponsort(){
        return $this->render('site/sponsort.html.twig');
    }
}
