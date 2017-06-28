<?php

namespace BP\BonoboBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BPBonoboBundle:Default:index.html.twig');
    }
}
