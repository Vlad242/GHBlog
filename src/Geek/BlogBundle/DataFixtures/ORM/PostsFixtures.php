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
            $post->setDate(new \DateTime())
                ->setContent('Some content')
                ->setTitle('Title'.$i)
                ->setTheme($this->getReference('theme'.$i))
                ->setUser($this->getReference('user'.$i))
                ->addTag($this->getReference('tag'.$i));
            $manager->persist($post);
            $this->setReference('post'.$i, $post);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ThemesFixtures::class,
        ];
    }

}