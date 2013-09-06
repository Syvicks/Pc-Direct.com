<?php

// src/Pcd/UserBundle/Form/Type/ProfileFormType.php

namespace Pcd\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;

class ProfileFormType extends BaseType
{
    public function buildUserForm(FormBuilderInterface $builder, array $options)
    {
        // ligne permettant l'héritage
        parent::buildUserForm($builder, $options);
        
        $builder
            ->add('nom', 'text', array(
                    'label' => 'Nom :',
                    'attr' => array(
                        'placeholder' => 'Exemple: Durand')))
            ->add('prenom', 'text', array(
                    'label' => 'Prenom :',
                    'attr' => array(
                        'placeholder' => 'Exemple: Gilles')))
            ->add('numVoieClient', 'text', array(
                    'label' => 'N° :',
                    'attr' => array(
                        'placeholder' => 'Exemple: 1bis')))
            ->add('libelleVoieClient', 'text', array(
                    'label' => 'Rue :',
                    'attr' => array(
                        'placeholder' => 'Exemple: Avenue du Générale De Gaulle')))
            ->add('cpClient', 'text', array(
                    'label' => 'Code Postal :',
                    'attr' => array(
                        'placeholder' => 'Exemple: 75000')))
            ->add('villeClient', 'text', array(
                    'label' => 'Ville :',
                    'attr' => array(
                        'placeholder' => 'Exemple: Paris')))
            ->add('paysClient', 'text', array(
                    'label' => 'Pays :',
                    'attr' => array(
                        'placeholder' => 'Exemple: France')))
            ->add('tel', 'text', array(
                    'label' => 'N° Téléphone :',
                    'attr' => array(
                        'placeholder' => 'Exemple: 0238757575')))
        ;
    }
    
    public function getName()
    {
        return 'pcd_user_profile';
    }
}