<?php

namespace StalkerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Arme
 *
 * @ORM\Table(name="arme")
 * @ORM\Entity(repositoryClass="StalkerBundle\Repository\ArmeRepository")
 */
class Arme
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var ArmeType
     *
     * @ORM\ManyToOne(targetEntity="StalkerBundle\Entity\ArmeType", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $armeType;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=true)
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="porteeEffective", type="integer", nullable=true)
     */
    private $porteeEffective;

    /**
     * @var int
     *
     * @ORM\Column(name="porteeMaximale", type="integer", nullable=true)
     */
    private $porteeMaximale;

    /**
     * @var string
     *
     * @ORM\Column(name="degat", type="string", length=255, nullable=true)
     */
    private $degat;

    /**
     * @var int
     *
     * @ORM\Column(name="degatMin", type="integer", nullable=true)
     */
    private $degatMin;

    /**
     * @var int
     *
     * @ORM\Column(name="degatMax", type="integer", nullable=true)
     */
    private $degatMax;

    /**
     * @var int
     *
     * @ORM\Column(name="bonusDeTouche", type="integer", nullable=true)
     */
    private $bonusDeTouche;

    /**
     * @var int
     *
     * @ORM\Column(name="contenanceChargeur", type="integer", nullable=true)
     */
    private $contenanceChargeur;

    /**
     * @var ArmeMunition
     *
     * @ORM\ManyToOne(targetEntity="StalkerBundle\Entity\ArmeMunition", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $armeMunition;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set armeType
     *
     * @param ArmeType $armeType
     *
     * @return Arme
     */
    public function setArmeType(ArmeType $armeType = null)
    {
        $this->armeType = $armeType;

        return $this;
    }

    /**
     * Get armeType
     *
     * @return ArmeType
     */
    public function getArmeType()
    {
        return $this->armeType;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Arme
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
     * Set description
     *
     * @param string $description
     *
     * @return Arme
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Arme
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set porteeEffective
     *
     * @param integer $porteeEffective
     *
     * @return Arme
     */
    public function setPorteeEffective($porteeEffective)
    {
        $this->porteeEffective = $porteeEffective;

        return $this;
    }

    /**
     * Get porteeEffective
     *
     * @return int
     */
    public function getPorteeEffective()
    {
        return $this->porteeEffective;
    }

    /**
     * Set porteeMaximale
     *
     * @param integer $porteeMaximale
     *
     * @return Arme
     */
    public function setPorteeMaximale($porteeMaximale)
    {
        $this->porteeMaximale = $porteeMaximale;

        return $this;
    }

    /**
     * Get porteeMaximale
     *
     * @return int
     */
    public function getPorteeMaximale()
    {
        return $this->porteeMaximale;
    }

    /**
     * Set degat
     *
     * @param string $degat
     *
     * @return Arme
     */
    public function setDegat($degat)
    {
        $this->degat = $degat;

        return $this;
    }

    /**
     * Get degat
     *
     * @return string
     */
    public function getDegat()
    {
        return $this->degat;
    }

    /**
     * Set degatMin
     *
     * @param integer $degatMin
     *
     * @return Arme
     */
    public function setDegatMin($degatMin)
    {
        $this->degatMin = $degatMin;

        return $this;
    }

    /**
     * Get degatMin
     *
     * @return int
     */
    public function getDegatMin()
    {
        return $this->degatMin;
    }

    /**
     * Set degatMax
     *
     * @param integer $degatMax
     *
     * @return Arme
     */
    public function setDegatMax($degatMax)
    {
        $this->degatMax = $degatMax;

        return $this;
    }

    /**
     * Get degatMax
     *
     * @return int
     */
    public function getDegatMax()
    {
        return $this->degatMax;
    }

    /**
     * Set bonusDeTouche
     *
     * @param integer $bonusDeTouche
     *
     * @return Arme
     */
    public function setBonusDeTouche($bonusDeTouche)
    {
        $this->bonusDeTouche = $bonusDeTouche;

        return $this;
    }

    /**
     * Get bonusDeTouche
     *
     * @return int
     */
    public function getBonusDeTouche()
    {
        return $this->bonusDeTouche;
    }

    /**
     * Set contenanceChargeur
     *
     * @param integer $contenanceChargeur
     *
     * @return Arme
     */
    public function setContenanceChargeur($contenanceChargeur)
    {
        $this->contenanceChargeur = $contenanceChargeur;

        return $this;
    }

    /**
     * Get contenanceChargeur
     *
     * @return int
     */
    public function getContenanceChargeur()
    {
        return $this->contenanceChargeur;
    }

    /**
     * Set armeMunition
     *
     * @param ArmeMunition $armeMunition
     *
     * @return Arme
     */
    public function setArmeMunition(ArmeMunition $armeMunition = null)
    {
        $this->armeMunition = $armeMunition;

        return $this;
    }

    /**
     * Get armeMunition
     *
     * @return ArmeMunition
     */
    public function getArmeMunition()
    {
        return $this->armeMunition;
    }
}

