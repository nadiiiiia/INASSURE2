<?php

namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\Meet;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;



Class MeetType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('tel1')
            ->add('tel2')
            ->add('tel3')
            ->add('fax1')
            ->add('fax2')
            ->add('surname')
            ->add('adresse')
            ->add('ville')
            ->add('npa')
            ->add('nomModif')
            ->add('prenomModif')
            ->add('age')
            ->add('ageEnfant1')
            ->add('ageEnfant2')
            ->add('ageEnfant3')
            ->add('ageEnfant4')
            ->add('ageConjoint')
            ->add('cmkSfieldfHTreatment')
            ->add('save', 'submit'
                ,   array(
                    'label' => 'save',
                    'translation_domain' => 'messages',
                ));
    }

    public function getName()
    {
        return 'Meet_type';
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'AppBundle\Entity\Meet'
        );
    }
}