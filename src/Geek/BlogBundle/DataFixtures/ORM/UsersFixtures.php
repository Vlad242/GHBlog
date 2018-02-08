<?php

namespace Geek\BlogBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Geek\BlogBundle\Entity\User;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UsersFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i < 11; $i++) {
            $user = new User();
            $password = $this->encoder->encodePassword($user, 'user'.$i);
            $user->setUsername('User'.$i)
                ->setPassword($password)
                ->setName('User'.$i);

            $manager->persist($user);

            $this->setReference('user'.$i, $user);
        }
        $manager->flush();
    }
}