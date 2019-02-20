<?php

namespace App\Controller;

use App\Entity\Profil;
use App\Form\InscriptionType;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;


class SecurityController extends AbstractController
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

    public function InscriptionMail(Profil $profil)
    {
        // New mail
        $message = (new \Swift_Message('Nouvelle demande de connexion sur le site du pilotari : '))
            ->setFrom('noreply@pilotari_gujan.fr')
            ->setTo('contact@pilotari_gujan.fr')
            ->setBody($this->renderView('site/mail_profil.html.twig', [
                'profil' => $profil
            ]), 'text/html');
        // Sent email
        $this->mailer->send($message);
    }

    /**
     * @Route("/inscription", name="inscription")
     */

    public function inscription(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder)
    {
        $profil = new Profil();

        $form = $this->createForm(InscriptionType::class, $profil);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $hash = $encoder->encodePassword($profil, $profil->getPassword());

            $profil->setPassword($hash);

            $this -> InscriptionMail($profil);

            $this->addFlash(
                'notice',
                'Vôtre demande d\'inscription à bien été pris en compte, vous aurez une réponse dans 72H'
            );

            $manager->persist($profil);
            $manager->flush();

            return $this->redirectToRoute('competition.html.twig');
        }

        return $this->render('site/inscription.html.twig',[
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion(){
        return $this->render('site/connexion.html.twig');
    }

}
