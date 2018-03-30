<?php

namespace Geek\BlogBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Geek\BlogBundle\Entity\User;

class UserRepository extends EntityRepository
{
    /**
     * @param User $user
     * @return mixed|null|object
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findById(User $user)
    {
        return $this->createQueryBuilder('u')
            ->where('u.id = :user')
            ->setParameters(['user' => $user])
            ->getQuery()->getOneOrNullResult();
    }
}