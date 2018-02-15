<?php

namespace Geek\BlogBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Geek\BlogBundle\Entity\Post;
use Doctrine\Common\Persistence\ObjectManager;

class PostsFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i < 11; $i++) {
            $post = new Post();
            $post
                ->setContent('Some content')
                ->setTitle('Title'.$i)
                ->setCategory($this->getReference('Category'.$i))
                ->setUser($this->getReference('user'.$i))
                ->addTag($this->getReference('tag'.$i))
                ->addLike($this->getReference('user'.$i));
            $manager->persist($post);
            $this->setReference('post'.$i, $post);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
        ];
    }

}