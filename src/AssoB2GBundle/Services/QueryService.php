<?php

namespace AssoB2GBundle\Services;

use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\FormFactoryInterface;

class QueryService
{
	public function __construct(\Doctrine\ORM\EntityManager $em,ContainerInterface $container)
	{
	    $this->em = $em;
        $this->container = $container;
	}
	
	public function getEvenements()
	{
        $query = $this->em->createQuery(
		    'SELECT p
		    FROM AssoB2GBundle:Evenement p
		    order by p.id desc'
		);
		$evenements = $query->getResult();
		return $evenements;
	}
}
	