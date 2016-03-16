<?php

namespace StalkerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use StalkerBundle\Entity\Utilisateur;

class LoadUtilisateurData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $toto = new Utilisateur();
        $toto->setNom('toto');
        $toto->setMotDePasse('toto');
        $toto->setEmail('toto@toto.org');

        $titi  = new Utilisateur();
        $titi->setNom('titi');
        $titi->setMotDePasse('titi');
        $titi->setEmail('titi@titi.org');

        $manager->persist($toto);
        $manager->persist($titi);

        $manager->flush();
    }
}
