<?php
// src/Pcd/UserBundle/Entity/User.php

namespace Pcd\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="user")
 * @ORM\Entity()
 */
class User extends BaseUser
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
     
    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $nom;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $prenom;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $numVoieClient;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $libelleVoieClient;

    /**
     * @var integer
     * @ORM\Column(type="integer", nullable=true, length=5)
     * 
     */
    private $cpClient;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $villeClient;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $paysClient;

    /**
     * @var integer
     * @ORM\Column(type="integer", nullable=true, length=10)
     */
    private $tel;

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
     * @return User
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
     * @return User
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
     * Set numVoieClient
     *
     * @param string $numVoieClient
     * @return User
     */
    public function setNumVoieClient($numVoieClient)
    {
        $this->numVoieClient = $numVoieClient;
    
        return $this;
    }

    /**
     * Get numVoieClient
     *
     * @return string 
     */
    public function getNumVoieClient()
    {
        return $this->numVoieClient;
    }

    /**
     * Set libelleVoieClient
     *
     * @param string $libelleVoieClient
     * @return User
     */
    public function setLibelleVoieClient($libelleVoieClient)
    {
        $this->libelleVoieClient = $libelleVoieClient;
    
        return $this;
    }

    /**
     * Get libelleVoieClient
     *
     * @return string 
     */
    public function getLibelleVoieClient()
    {
        return $this->libelleVoieClient;
    }

    /**
     * Set cpClient
     *
     * @param integer $cpClient
     * @return User
     */
    public function setCpClient($cpClient)
    {
        $this->cpClient = $cpClient;
    
        return $this;
    }

    /**
     * Get cpClient
     *
     * @return integer 
     */
    public function getCpClient()
    {
        return $this->cpClient;
    }

    /**
     * Set villeClient
     *
     * @param string $villeClient
     * @return User
     */
    public function setVilleClient($villeClient)
    {
        $this->villeClient = $villeClient;
    
        return $this;
    }

    /**
     * Get villeClient
     *
     * @return string 
     */
    public function getVilleClient()
    {
        return $this->villeClient;
    }

    /**
     * Set paysClient
     *
     * @param string $paysClient
     * @return User
     */
    public function setPaysClient($paysClient)
    {
        $this->paysClient = $paysClient;
    
        return $this;
    }

    /**
     * Get paysClient
     *
     * @return string 
     */
    public function getPaysClient()
    {
        return $this->paysClient;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    
        return $this;
    }

    /**
     * Get tel
     *
     * @return integer 
     */
    public function getTel()
    {
        return $this->tel;
    }
    
    public function __construct()
    {
        parent::__construct();
    }
}