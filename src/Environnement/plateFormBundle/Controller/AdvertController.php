<?php



namespace Environnement\platFormBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class AdvertController {
      public function indexAction() {
      	     return new Response("Notre propre Hello World !");
      }
}