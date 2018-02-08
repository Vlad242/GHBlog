<?php

namespace Geek\BlogBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Geek\BlogBundle\Entity\Comment;
use Doctrine\Common\Persistence\ObjectManager;

class CommentsFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i < 11; $i++) {
            $comment = new Comment();
            $comment->setDate(new \DateTime())
                ->setContent('Some comment text')
                ->setPost($this->getReference('post'.$i))
                ->setUser($this->getReference('user'.$i));
            $manager->persist($comment);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            PostsFixtures::class,
        ];
    }
}