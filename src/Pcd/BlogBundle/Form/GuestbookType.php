<?php

// src/Pcd/BlogBundle/Form/GuestbookType.php

namespace Pcd\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GuestbookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array(
                    'label' => 'Nom',
                    'required' => true,
                    'attr' => array(
                        'placeholder' => 'Exemple: Toto66')))
            ->add('emailAddress', 'email', array(
                    'label' => 'Email',
                    'attr' => array(
                        'placeholder' => 'Exemple: email@domain.com')))
            ->add('note', 'choice', array(
                    'label' => 'Note',
                    'choices' => array(
                        '0' => '0',
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5')))
            ->add('body', 'textarea', array(
                    'label' => 'Message',
                    'required' => true,
                    'attr' => array(
                        'placeholder' => 'Votre message')))
            ->add('captcha', 'captcha', array(
                    'label' => 'Captcha',
                    'width' => 200,
                    'height' => 50,
                    'length' => 6,
                    'as_url' => true,
                    'reload' => true,
                    'attr' => array(
                        'placeholder' => 'Entrez le code')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pcd\BlogBundle\Entity\Guestbook'
        ));
    }

    public function getName()
    {
        return 'pcd_blogbundle_guestbooktype';
    }
}
