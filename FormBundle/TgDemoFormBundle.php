<?php

namespace Tg\Demo\FormBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class TgDemoFormBundle extends Bundle {

    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container
            ->register('form.type.customer', 'Tg\Demo\FormBundle\Form\CustomerType')
            ->addTag('form.type', array('alias' => 'customer'))
        ;

        $container
            ->register('demo_form_bundle.demo.controller', 'Tg\Demo\FormBundle\Controller\DemoController')
            ->addArgument(new Reference('form.factory'))
        ;
    }

}