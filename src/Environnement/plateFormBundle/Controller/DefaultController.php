<?php

namespace Environnement\plateFormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EnvironnementplateFormBundle:Default:index.html.twig');
    }
}
