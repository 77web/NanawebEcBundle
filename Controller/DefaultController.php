<?php

namespace Nanaweb\EcBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NanawebEcBundle:Default:index.html.twig');
    }
}
