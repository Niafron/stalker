<?php

namespace StalkerBundle\Entity\tests\units;

use StalkerBundle\Entity\Arme as TestedArme;

require_once __DIR__ . '/../../../bootstrap.php';

class Arme extends \atoum\test
{
    public function test__construct()
    {
        $this
            ->given ($arme = new TestedArme())
            ->then (
                $this->assert("On teste l'instanciation classique d'une arme")
                    ->object($arme)
                    ->isInstanceOf("\\StalkerBundle\\Entity\\Arme")
            );
    }

    public function testArmeType()
    {
        $this
            ->given ($arme = new TestedArme())
            ->if ($armeType = \MockFactory::createMockArmeType())
            ->then (
                $this->assert("On vérifie que la méthode setArmeType nous retourne bien une instance d'arme")
                    ->object($arme->setArmeType($armeType))
                    ->isInstanceOf("\\StalkerBundle\\Entity\\Arme")
            );
    }

    public function testNom()
    {
        $this
            ->given ($arme = new TestedArme())
            ->if ($nom = 'nom de l\'arme')
            ->then (
                $this->assert("On vérifie que la méthode setNom nous retourne bien une instance d'arme")
                    ->object($arme->setNom($nom))
                    ->isInstanceOf("\\StalkerBundle\\Entity\\Arme")
            )
            ->then (
                $this->assert("On vérifie que la méthode getNom nous permet bien de récupérer la donnée précédemment définie")
                    ->string($arme->getNom())
                    ->isEqualTo($nom)
            );
    }

    public function testDescription()
    {
        $this
            ->given ($arme = new TestedArme())
            ->if ($description = 'description de l\'arme')
            ->then (
                $this->assert("On vérifie que la méthode setDescription nous retourne bien une instance d'arme")
                    ->object($arme->setDescription($description))
                    ->isInstanceOf("\\StalkerBundle\\Entity\\Arme")
            )
            ->then (
                $this->assert("On vérifie que la méthode getDescription nous permet bien de récupérer la donnée précédemment définie")
                    ->string($arme->getDescription())
                    ->isEqualTo($description)
            );
    }

    public function testPrix()
    {
        $this
            ->given ($arme = new TestedArme())
            ->if ($prix = 10)
            ->then (
                $this->assert("On vérifie que la méthode setPrix nous retourne bien une instance d'arme")
                    ->object($arme->setPrix($prix))
                    ->isInstanceOf("\\StalkerBundle\\Entity\\Arme")
            )
            ->then (
                $this->assert("On vérifie que la méthode getPrix nous permet bien de récupérer la donnée précédemment définie")
                    ->integer($arme->getPrix())
                    ->isEqualTo($prix)
            );

        $this
            ->given ($arme = new TestedArme())
            ->if ($arme->setPrix(100.20))
            ->then (
                $this->assert("On teste le cast en int du prix")
                    ->integer($arme->getPrix())
                    ->isEqualTo(100)
            );

        $this
            ->given ($arme = new TestedArme())
            ->if ($arme->setPrix(null))
            ->then (
                $this->assert("On teste le set à null pour le prix")
                    ->variable($arme->getPrix())
                    ->isNull()
            );
    }

    public function testPorteeEffective()
    {
        $this
            ->given ($arme = new TestedArme())
            ->if ($porteeEffective = 10)
            ->then (
                $this->assert("On vérifie que la méthode setPorteeEffective nous retourne bien une instance d'arme")
                    ->object($arme->setPorteeEffective($porteeEffective))
                    ->isInstanceOf("\\StalkerBundle\\Entity\\Arme")
            )
            ->then (
                $this->assert("On vérifie que la méthode getPorteeEffective nous permet bien de récupérer la donnée précédemment définie")
                    ->integer($arme->getPorteeEffective())
                    ->isEqualTo($porteeEffective)
            );

        $this
            ->given ($arme = new TestedArme())
            ->if ($arme->setPrix('100.20'))
            ->then (
                $this->assert("On teste le cast en int de la portée effective")
                    ->variable($arme->getPorteeEffective())
                    ->isNull()
            );

        $this
            ->given ($arme = new TestedArme())
            ->if ($arme->setPorteeEffective(null))
            ->then (
                $this->assert("On teste le set à null pour la portée effective")
                    ->variable($arme->getPorteeEffective())
                    ->isNull()
            );
    }

    public function testPorteeMaximale()
    {
        $this
            ->given ($arme = new TestedArme())
            ->if ($porteeMaximale = 44)
            ->then (
                $this->assert("On vérifie que la méthode setPorteeMaximale nous retourne bien une instance d'arme")
                    ->object($arme->setPorteeMaximale($porteeMaximale))
                    ->isInstanceOf("\\StalkerBundle\\Entity\\Arme")
            )
            ->then (
                $this->assert("On vérifie que la méthode getPorteeMaximale nous permet bien de récupérer la donnée précédemment définie")
                    ->integer($arme->getPorteeMaximale())
                    ->isEqualTo($porteeMaximale)
            );

        $this
            ->given ($arme = new TestedArme())
            ->if ($arme->setPorteeMaximale(40.34))
            ->then (
                $this->assert("On teste le cast en int de la portée maximale")
                    ->integer($arme->getPorteeMaximale())
                    ->isEqualTo(40)
            );

        $this
            ->given ($arme = new TestedArme())
            ->if ($arme->setPorteeMaximale(null))
            ->then (
                $this->assert("On teste le set à null pour la portée maximale")
                    ->variable($arme->getPorteeMaximale())
                    ->isNull()
            );
    }

    public function testDegat()
    {
        $this
            ->given($arme = new TestedArme())
            ->if($degat = '3D6+2')
            ->then(
                $this->assert("On vérifie que la méthode setDegat nous retourne bien une instance d'arme")
                    ->object($arme->setDegat($degat))
                    ->isInstanceOf("\\StalkerBundle\\Entity\\Arme")
            )
            ->then(
                $this->assert("On vérifie que la méthode getDegat nous permet bien de récupérer la donnée précédemment définie")
                    ->string($arme->getDegat())
                    ->isEqualTo($degat)
            );
    }

    public function testBousDeTouche()
    {
        $this
            ->given ($arme = new TestedArme())
            ->if ($bonusDeTouche = 1)
            ->then (
                $this->assert("On vérifie que la méthode setBonusDeTouche nous retourne bien une instance d'arme")
                    ->object($arme->setBonusDeTouche($bonusDeTouche))
                    ->isInstanceOf("\\StalkerBundle\\Entity\\Arme")
            )
            ->then (
                $this->assert("On vérifie que la méthode getBonusDeTouche nous permet bien de récupérer la donnée précédemment définie")
                    ->integer($arme->getBonusDeTouche())
                    ->isEqualTo($bonusDeTouche)
            );

        $this
            ->given ($arme = new TestedArme())
            ->if ($arme->setBonusDeTouche(12.3))
            ->then (
                $this->assert("On teste le cast en int du bonus de touche")
                    ->integer($arme->getBonusDeTouche())
                    ->isEqualTo(12)
            );

        $this
            ->given ($arme = new TestedArme())
            ->if ($arme->setBonusDeTouche(null))
            ->then (
                $this->assert("On teste le set à null pour le bonus de touche")
                    ->variable($arme->getBonusDeTouche())
                    ->isNull()
            );
    }

    public function testContenanceChargeur()
    {
        $this
            ->given ($arme = new TestedArme())
            ->if ($contenanceChargeur = 3)
            ->then (
                $this->assert("On vérifie que la méthode setContenanceChargeur nous retourne bien une instance d'arme")
                    ->object($arme->setContenanceChargeur($contenanceChargeur))
                    ->isInstanceOf("\\StalkerBundle\\Entity\\Arme")
            )
            ->then (
                $this->assert("On vérifie que la méthode getContenanceChargeur nous permet bien de récupérer la donnée précédemment définie")
                    ->integer($arme->getContenanceChargeur())
                    ->isEqualTo($contenanceChargeur)
            );

        $this
            ->given ($arme = new TestedArme())
            ->if ($arme->setContenanceChargeur(23.9))
            ->then (
                $this->assert("On teste le cast en int de la contenance chargeur")
                    ->integer($arme->getContenanceChargeur())
                    ->isEqualTo(23)
            );

        $this
            ->given ($arme = new TestedArme())
            ->if ($arme->setBonusDeTouche(null))
            ->then (
                $this->assert("On teste le set à null pour la contenance chargeur")
                    ->variable($arme->getContenanceChargeur())
                    ->isNull()
            );
    }
}






















