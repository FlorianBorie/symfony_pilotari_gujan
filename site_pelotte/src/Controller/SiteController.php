<?php

namespace App\Controller;


use App\Entity\Events;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\Contacter;
use App\Entity\Profil;
use App\Entity\Newsletter;

class SiteController extends AbstractController
{
    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    //Recuperation par injection du Swift_Mailer
    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
    public function contacterMail(Contacter $contacter)
    {
        // New mail
        $message = (new \Swift_Message('Nous contacter : '))
            ->setFrom('noreply@pilotari_gujan.fr')
            ->setTo('tototata33380@gmail.com')
            ->setBody($this->renderView('site/contacter_mail.html.twig', [
                'contacter' => $contacter
            ]), 'text/html');
        // Sent email
        $this->mailer->send($message);
    }

    public function envoiNewsletter(Newsletter $newsletter)
    {
        // New mail
        $message = (new \Swift_Message('Demande newsletter: '))
            ->setFrom('noreply@pilotari_gujan.fr')
            ->setTo('tototata33380@gmail.com')
            ->setBody($this->renderView('site/contacter_newsletter.html.twig', [
                'newsletter' => $newsletter
            ]), 'text/html');
        // Sent email
        $this->mailer->send($message);
    }
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
     * @Route("/cancha", name="cancha")
     */
    public function cancha()
    {
        return $this->render('site/cancha.html.twig');
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
    public function newsletter(Request $request, ObjectManager $manager)
    {
        $newsletter = new Newsletter();

        $form = $this->createFormBuilder($newsletter)
            ->add('mail', EmailType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->envoiNewsletter($newsletter);

            $this->addFlash(
                'notice',
                'Votre demande à bien été envoyé'
            );

            $manager->persist($newsletter);
            $manager->flush();

        }
        return $this->render('site/newsletter.html.twig', [
            'formNewsletter' => $form->createView()
        ]);
    }

    /**
     * @Route("/contacter", name="contacter")
     */
    public function contacter(Request $request, ObjectManager $manager)
    {
        $contacter = new Contacter();

        $form = $this->createFormBuilder($contacter)
            ->add('nom')
            ->add('mail', EmailType::class)
            ->add('objet')
            ->add('message')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->contacterMail($contacter);

            $this->addFlash(
                'notice',
                'Votre message à bien été envoyé'
            );

            $manager->persist($contacter);
            $manager->flush();

        }

        return $this->render('site/contacter.html.twig', [
            'formContacter' => $form->createView()
        ]);
    }

    /**
     * @Route("/events", name="events")
     */
    public function test(Request $request)
    {
        $events = [];
        $eventsFromDatabase = $this->getDoctrine()->getRepository(Events::class)->findBy(['type' => $request->query->get('type')]); // aller chercher les events dans la bdd
        foreach ($eventsFromDatabase as $event) {
            $events[] = [
                'title' => $event->getTitre(),
                'start' => $event->getDateDebut()->format('c'),
                'end' => $event->getDateFin()->format('c'),
                'id' => $event->getId(),
                'url' => '/event/' . $event->getId()

            ];
        }

        return new JsonResponse($events);
    }

    /**
     * @Route("/event/{id}", name="event")
     */
    public function event($id)
    {
        $eventFromDatabase = $this->getDoctrine()->getRepository(Events::class)->find($id); // aller chercher les events dans la bdd

        return new JsonResponse($eventFromDatabase);
    }
}
