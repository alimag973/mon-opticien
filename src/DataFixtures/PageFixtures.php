<?php

namespace App\DataFixtures;

use App\Entity\Page;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class PageFixtures extends Fixture
{

public const PAGES = [
    [
        'title' => 'Mentions Légales'
    ],
    [
        'title' => 'Mentions contractuelles'
    ],
    [
        'title' => 'Données personnelles et cookies'
    ],
];

    public function load(ObjectManager $manager): void 
    {
        $faker = Factory::create();
        foreach (self::PAGES as $pagesInfo) {
            $page = new Page();
            $page->setContent($faker->paragraphs(10, true));
            $page->setTitle($pagesInfo['title']);
            $manager->persist($page);
        }

        $manager->flush();
     }
}