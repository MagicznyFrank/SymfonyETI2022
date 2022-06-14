<?php

namespace App\Controller;

use App\Entity\Questionnaire;
use App\Form\QuestionnaireFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class QuestionnaireFormController extends AbstractController
{
    /**
     * @Route ("/AddQuestion"), name="add_question"
     */
    public function show(Environment $twig, Request $request, EntityManagerInterface $entityManager){
        $questionnaire = new Questionnaire();

        $form = $this->createForm(QuestionnaireFormType::class, $questionnaire);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $entityManager->persist($questionnaire);
            $entityManager->flush();

            return new Response('Pytanie nr ' . $questionnaire->getId() . ' zostalo stworzone');

        }


        return $this->render('Blog/NewQuestion.html.twig', [
            'QuestionnaireForm' => $form->createView()

        ]);
    }


}