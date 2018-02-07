<?php

namespace Geek\BlogBundle\DataFixtures\ORM;

use Geek\BlogBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UsersFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('Superadmin');

        $password = $this->encoder->encodePassword($user, '123456');
        $user->setPassword($password);
        $user->setRoles('ROLE_ADMIN');
        $user->setName('Superadmin');
        $manager->persist($user);
        $manager->flush();

    }
}