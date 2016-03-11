<?php

namespace StalkerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use StalkerBundle\Entity\Arme;
use StalkerBundle\Entity\ArmeMunition;
use StalkerBundle\Entity\ArmeType;

class LoadArmeData implements FixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     */
    public function load(ObjectManager $manager)
    {
        $toto = new User();
        $toto->setName('toto');
        $toto->setPassword('toto');
        $toto->setEmail('toto@toto.org');

        $titi  = new User();
        $titi->setName('titi');
        $titi->setPassword('titi');
        $titi->setEmail('titi@titi.org');

        $manager->persist($toto);
        $manager->persist($titi);

        $manager->flush();
    }
}
