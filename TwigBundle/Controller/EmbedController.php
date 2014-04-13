<?php

namespace Tg\Demo\TwigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("demo/twig/embed")
 */
class EmbedController extends Controller {

    /**
     * @Route("/")
     * @Template
     */
    function indexAction() {
        return array();
    }

}