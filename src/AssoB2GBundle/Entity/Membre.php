<?php

namespace AssoB2GBundle\Entity;

/**
 * Membre
 */
class Membre
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $poste;
	
    private $evenement;
	
    public function __construct() {
        $this->evenement = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Membre
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Membre
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set poste
     *
     * @param string $poste
     *
     * @return Membre
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;

        return $this;
    }

    /**
     * Get poste
     *
     * @return string
     */
    public function getPoste()
    {
        return $this->poste;
    }
	
    /**
     * @param  Evenement $evenement
     */
    public function addEvenement(\AppBundle\Entity\Evenement $evenement)
    {
    	$evenement->addMembre($this);
        $this->evenement[] = $evenement;
    }
	
    /**
     * @return ArrayCollection $membre
     */
    public function getEvenement()
    {
        return $this->evenement;
    }
	
    public function removeEvenement(\AppBundle\Entity\Evenement $evenement)
    {
        $this->evenement->removeElement($evenement);
    }
}

