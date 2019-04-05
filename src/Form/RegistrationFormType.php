<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add(
                'Password',
                RepeatedType::class,
                [
                        'type' => PasswordType::class,
                        'invalid_message' => 'FORM.USER.PASSWORD.ERROR',
                        'first_options' => ['label' => 'FORM.USER.PASSWORD.LABEL'],
                        'second_options' => ['label' => 'FORM.USER.PASSWORD.LABEL2']
                ]
            )
            ->add('email', EmailType::class)
            ->add(
                'termAccepted',
                CheckboxType::class,
                ['label' => 'Accept terms of service']
            );
        if($options['standalone']) {
            $builder->add('submit', SubmitType::class);
        };
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'standalone' => false
        ]);
    }
}
