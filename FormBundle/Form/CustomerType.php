<?php

namespace Tg\Demo\FormBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CustomerType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('some_select', 'choice', array(
                'choices' => array(
                    'eins',
                    'zwei',
                    'drei',
                    'vier'
                )
            ))
        ;
    }

    function getName() {
        return 'customer';
    }

}