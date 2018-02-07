<?php

namespace Geek\BlogBundle\DataFixtures\ORM;

use Geek\BlogBundle\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TagsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $tag = new Tag();
            $tag->setName('tag'.$i);
            $manager->persist($tag);
        }

        $manager->flush();
    }
}