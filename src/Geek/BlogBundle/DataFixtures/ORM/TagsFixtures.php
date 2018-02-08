<?php

namespace Geek\BlogBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Geek\BlogBundle\Entity\Tag;
use Doctrine\Common\Persistence\ObjectManager;

class TagsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i < 11; $i++) {
            $tag = new Tag();
            $tag->setName('tag'.$i);
            $manager->persist($tag);

            $this->setReference('tag'.$i, $tag);
        }

        $manager->flush();
    }
}