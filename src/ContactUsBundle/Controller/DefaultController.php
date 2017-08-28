<?php

namespace ContactUsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ContactUsBundle:Default:index.html.twig');
    }
}
