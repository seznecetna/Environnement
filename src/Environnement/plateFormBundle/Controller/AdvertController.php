<?php

namespace Environnement\plateFormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
        $content = $this
            ->get('templating')
            ->render('EnvironnementplateFormBundle:Advert:index.html.twig', array('nom' => 'Jocelyn #Biniou '));
             return new Response($content);
    }
}