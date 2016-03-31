<?php

namespace AssoB2GBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function accueilAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
		    'SELECT p
		    FROM AssoB2GBundle:Evenement p'
		);
		$entities = $query->getResult();
		$evenement=end($entities);
		
        return $this->render('AssoB2GBundle:Default:accueil.html.twig', array(
            'evenement' => $evenement,
        ));
    }
	
    public function membresAction()
    {
        return $this->render('AssoB2GBundle:Default:membres.html.twig');
    }
	
    public function evenementsAction()
    {
        return $this->render('AssoB2GBundle:Default:evenements.html.twig');
    }
	
    public function aproposAction()
    {
        return $this->render('AssoB2GBundle:Default:apropos.html.twig');
    }
	
    public function contactAction()
    {
        return $this->render('AssoB2GBundle:Default:contact.html.twig');
    }
}
