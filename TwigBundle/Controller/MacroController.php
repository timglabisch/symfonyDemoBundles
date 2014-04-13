<?php

namespace Tg\Demo\TwigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("demo/twig/macro")
 * @Template
 */
class MacroController extends Controller {

    /**
     * @Route("/", name="foo_bar_route")
     * @Template
     */
    function indexAction() {
        return array();
    }

}