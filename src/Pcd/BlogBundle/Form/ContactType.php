<?php

// src/Pcd/BlogBundle/Form/ContactType.php

namespace Pcd\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array(
                    'label' => 'Nom',
                    'required' => true,
                    'attr' => array(
                        'placeholder' => 'Exemple: Dupont Henry')))
            ->add('email', 'email', array(
                    'label' => 'Email',
                    'required' => true,
                    'attr' => array(
                        'placeholder' => 'Exemple: email@domain.com')))
            ->add('subject', 'text', array(
                    'label' => 'Sujet',
                    'required' => true,
                    'attr' => array(
                        'placeholder' => 'Intitulé de votre message')))
            ->add('body', 'textarea', array(
                    'label' => 'Message',
                    'required' => true,
                    'attr' => array(
                        'placeholder' => 'Votre message')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pcd\BlogBundle\Entity\Contact'
        ));
    }

    public function getName()
    {
        return 'pcd_blogbundle_contacttype';
    }
}
