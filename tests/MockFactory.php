<?php

class MockFactory
{
    public static function createMockArmeType ()
    {
        $mockArmeType = new \mock\StalkerBundle\Entity\ArmeType;
        $mockArmeType->getMockController()->getId = function () {
            return 1;
        };
        $mockArmeType->getMockController()->getNom = function () {
            return 'nom du type d\'arme';
        };
        $mockArmeType->getMockController()->getDescription = function () {
            return 'description du type d\'arme';
        };
    }

    public static function createMockArmeMunition ()
    {
        $mockArmeType = new \mock\StalkerBundle\Entity\ArmeMunition;
        $mockArmeType->getMockController()->getId = function () {
            return 1;
        };
        $mockArmeType->getMockController()->getNom = function () {
            return 'nom de la munition';
        };
        $mockArmeType->getMockController()->getDescription = function () {
            return 'description de la munition';
        };
    }
}
