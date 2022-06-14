<?php

namespace App\Form;

use App\Entity\Questionnaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuestionnaireFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        /*
        $questionnaire = new Questionnaire();
        $builder->add(Answer, ChoiceType::class)[
            new Answer($questionnaire->getAnswerA()),
            new Answer($questionnaire->getAnswer2()),
            new Answer($questionnaire->getAnswer3())
            ];
        */
        /*
        $builder
            ->add('Question')
            ->add('AnswerA')
            ->add('Answer2')
            ->add('Answer3')
            ->add('Submit',SubmitType::class)
        ;
        */
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Questionnaire::class,
        ]);
    }
}
