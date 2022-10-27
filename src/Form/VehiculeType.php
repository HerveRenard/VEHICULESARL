<?php

namespace App\Form;

use App\Entity\Vehicule;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VehiculeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numChassis')
            ->add('dateA')
            ->add('energie')
            ->add('matricule')
            ->add('prixJr')
            ->add('nbPorte')
            ->add('nbPasger')
            ->add('gps')
            ->add('aps')
            ->add('couleur')
            ->add('antiderap')
            ->add('airbag')
            ->add('alarm')
            ->add('km')
            ->add('clim')
            ->add('etat')
            ->add('lvlCarbu')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vehicule::class,
        ]);
    }
}
