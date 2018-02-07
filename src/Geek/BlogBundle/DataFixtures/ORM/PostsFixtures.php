<?php

namespace Geek\BlogBundle\DataFixtures\ORM;

use Geek\BlogBundle\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PostsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $post = new Post();
            $post->setDate(new \DateTime());
            $post->setContent('Some content');
            $post->setTitle('Title'.$i);
            $manager->persist($post);
        }

        $manager->flush();
    }
}