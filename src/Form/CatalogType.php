<?php

namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use AppBundle\Entity\Catalog;
use Symfony\Component\Form\Extension\Core\Type\DateType;


Class MeetType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subject', TextareaType::class, array(
                'attr' => array('rows' => '1', 'cols' => '5')))
            ->add('mission', TextareaType::class, array(
                'attr' => array('rows' => '10', 'cols' => '15')))
            ->add('starting_date', DateType::class, array(
                'label'   => 'starting_date',
                'widget' => 'single_text',
                'html5' => false,
                'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
                'attr' => ['class' => 'datetimepicker'],
            ))
            ->add('ending_date', DateType::class, array(
                'label'   => 'ending_date',
                'widget' => 'single_text',
                'html5' => false,
                'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
                'attr' => ['class' => 'datetimepicker'],
            ))
            ->add('technical_knowledge',  TextareaType::class, array(
                'attr' => array('rows' => '1', 'cols' => '5')))
            ->add('save', 'submit'
                ,   array(
                    'label' => 'save',
                    'translation_domain' => 'messages',
                ));
    }

    public function getName()
    {
        return 'Catalog_type';
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'AppBundle\Entity\Catalog'
        );
    }
}