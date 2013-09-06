<?php

// src/Pcd/UserBundle/Form/Type/RegistrationFormType.php

namespace Pcd\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // ligne permettant l'héritage
        parent::buildForm($builder, $options);
        
        $builder
            ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle', 'attr' => array(
                        'placeholder' => 'Exemple: Toto66')))
            ->add('email', 'email', array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle', 'attr' => array(
                        'placeholder' => 'Exemple: email@domain.com')))
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'form.password', 'attr' => array(
                        'placeholder' => 'Votre mot de passe')),
                'second_options' => array('label' => 'form.password_confirmation', 'attr' => array(
                        'placeholder' => 'Verification de votre mot de passe')),
                'invalid_message' => 'fos_user.password.mismatch'))
        ;
    }
    
    public function getName()
    {
        return 'pcd_user_registration';
    }
}