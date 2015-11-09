<?php

namespace AssoB2GBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function accueilAction()
    {
        return $this->render('AssoB2GBundle:Default:accueil.html.twig');
    }
}
