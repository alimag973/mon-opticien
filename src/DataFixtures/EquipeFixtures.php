<?php

namespace App\DataFixtures;

use App\Entity\Equipe;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EquipeFixtures extends Fixture
{
    public const EQUIPELIST = [
        [
            'firstname' => 'Marie',
            'pictures' => 'marie.jpeg',
            'presentation' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est.',
        ],
        [
            'firstname' => 'Camille',
            'pictures' => 'camille.jpeg',
            'presentation' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est.',
        ],
    ];

    public function load(ObjectManager $manager): void 
    {
        foreach (self::EQUIPELIST as $key => $equipeInfo){
        $equipe = new Equipe();
        $equipe->setFirstname($equipeInfo['firstname']);
        $equipe->setPictures($equipeInfo['pictures']);
        $equipe->setPresentation($equipeInfo['presentation']);
        $manager->persist($equipe);
        }
        $manager->flush();
    }
}