<?php

namespace Resume\ResumeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ResumeBundle:Default:index.html.twig');
    }
}
