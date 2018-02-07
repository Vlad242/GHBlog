<?php

namespace Geek\BlogBundle\DataFixtures\ORM;

use Geek\BlogBundle\Entity\Theme;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ThemesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $theme = new Theme();
            $theme->setName('theme'.$i);
            $manager->persist($theme);
        }

        $manager->flush();
    }
}