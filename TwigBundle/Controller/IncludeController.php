<?php

namespace Tg\Demo\TwigBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("demo/twig/include")
 */
class IncludeController {

    /**
     * @Route("/")
     * @Template
     */
    function indexAction() {
        return array();
    }

    /**
     * @Route("/define_foo")
     * @Template
     */
    function index_define_fooAction() {
        return array();
    }

    /**
     * @Route("/define_foo_only")
     * @Template
     */
    function index_define_foo_onlyAction() {
        return array();
    }

    /**
     * @Route("/define_foo_only_with")
     * @Template
     */
    function index_define_foo_only_withAction() {
        return array();
    }


}