<?php

namespace AssoB2GBundle\Entity;

/**
 * Evenement
 */
class Evenement
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
    private $systName;

    /**
     * @var string
     */
    private $commanditaire;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $role;

    /**
     * @var \DateTime
     */
    private $dateDebut;

    /**
     * @var \DateTime
     */
    private $dateFin;

    /**
     * @var string
     */
    private $lieu;
	
    private $membre;
	
    public function __construct() {
        $this->membre = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Evenement
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
     * Set systName
     *
     * @param string $systName
     *
     * @return Evenement
     */
    public function setSystName($systName)
    {
        $this->systName = $systName;

        return $this;
    }

    /**
     * Get systName
     *
     * @return string
     */
    public function getSystName()
    {
        return $this->systName;
    }

    /**
     * Set commanditaire
     *
     * @param string $commanditaire
     *
     * @return Evenement
     */
    public function setCommanditaire($commanditaire)
    {
        $this->commanditaire = $commanditaire;

        return $this;
    }

    /**
     * Get commanditaire
     *
     * @return string
     */
    public function getCommanditaire()
    {
        return $this->commanditaire;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Evenement
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Evenement
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getLieu()
    {
        return $this->lieu;
    }
	
    /**
     * @param  Membre $membre
     */
    public function addMembre(\AppBundle\Entity\Membre $membre)
    {
    	$membre->addEvenement($this);
        $this->membre[] = $membre;
    }
	
    /**
     * @return ArrayCollection $membre
     */
    public function getMembre()
    {
        return $this->membre;
    }
	
    public function removeMembre(\AppBundle\Entity\Membre $membre)
    {
        $this->membre->removeElement($membre);
    }
}

