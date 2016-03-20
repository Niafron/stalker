<?php

namespace StalkerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use StalkerBundle\Entity\Arme;
use StalkerBundle\Entity\ArmeMunition;
use StalkerBundle\Entity\ArmeType;

class LoadArmeData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $armeType = new ArmeType();
        $armeType->setNom('Fusil');
        $armeType->setDescription('Description du type d\'arme fusil.');

        $armeMunition = new ArmeMunition();
        $armeMunition->setNom('12x70 Buckshot');
        $armeMunition->setDescription('Description de la munition 12x70 Buckshot');

        $arme = new Arme();
        $arme->setArmeType($armeType);
        $arme->setNom('Fusil à pompe');
        $arme->setDescription('Description du fusil à pompe.');
        $arme->setPrix(100);
        $arme->setPorteeEffective(6);
        $arme->setPorteeMaximale(10);
        $arme->setDegat('3D4+2');
        $arme->setBonusDeTouche(0);
        $arme->setContenanceChargeur(3);
        $arme->setArmeMunition($armeMunition);
        $manager->persist($arme);

        $arme = new Arme();
        $arme->setArmeType($armeType);
        $arme->setNom('Fusil à canon scié');
        $arme->setDescription('Description du fusil à canon scié.');
        $arme->setPrix(60);
        $arme->setPorteeEffective(4);
        $arme->setPorteeMaximale(6);
        $arme->setDegat('3D4');
        $arme->setBonusDeTouche(0);
        $arme->setContenanceChargeur(2);
        $arme->setArmeMunition($armeMunition);
        $manager->persist($arme);

        $manager->flush();
    }
}
