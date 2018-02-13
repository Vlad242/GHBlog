<?php

namespace Geek\BlogBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Geek\BlogBundle\Entity\Category;
use Doctrine\Common\Persistence\ObjectManager;

class ThemesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i < 11; $i++) {
            $theme = new Category();
            $theme->setName('theme'.$i);
            $manager->persist($theme);

            $this->setReference('theme'.$i, $theme);
        }

        $manager->flush();
    }
}