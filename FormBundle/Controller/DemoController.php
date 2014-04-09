<?php

namespace Tg\Demo\FormBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\FormFactoryInterface;

/**
 * Class DemoController
 * @package Tg\Demo\FormBundle\Controller
 * @Route(service="demo_form_bundle.demo.controller")
 */
class DemoController {

    protected $formFactory;

    function __construct(FormFactoryInterface $formFactory) {
        $this->formFactory = $formFactory;
    }

    /**
     * @Template
     * @Route("/demo/form")
     */
    function indexAction() {

        $formCustomer = $this->formFactory->create('customer');

        return array(
            'form' => $formCustomer->createView()
        );
    }

}