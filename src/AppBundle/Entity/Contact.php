<?php

namespace AppBundle\Entity;
/**
 * Created by PhpStorm.
 * User: Sufiane
 * Date: 14/12/2015
 * Time: 13:54
 */

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Contact
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="Contact")
 */
class Contact{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $_id;
    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $_nom;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $_prenom;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $_societe;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $_adresse;
    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\URL(message = "Veuillez saisir une url valide")
     */
    private $_site;
    /**
     * @ORM\Column(type="boolean")
     */
    private $_pro;
    /**
     * @ORM\Column(type="integer")
     */
    private $_telephone;
    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\Email(message = "Veuillez saisir un email valide")
     */
    private $_email;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->_prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getSociete()
    {
        return $this->_societe;
    }

    /**
     * @param mixed $societe
     */
    public function setSociete($societe)
    {
        $this->_societe = $societe;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->_adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->_adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getSite()
    {
        return $this->_site;
    }

    /**
     * @param mixed $site
     */
    public function setSite($site)
    {
        $this->_site = $site;
    }

    /**
     * @return mixed
     */
    public function getPro()
    {
        return $this->_pro;
    }

    /**
     * @param mixed $pro
     */
    public function setPro($pro)
    {
        $this->_pro = $pro;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->_telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->_telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }
}