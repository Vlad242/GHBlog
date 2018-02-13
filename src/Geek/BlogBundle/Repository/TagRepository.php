<?php

namespace Geek\BlogBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Geek\BlogBundle\Entity\Tag;

class TagRepository extends EntityRepository
{
    /**
     * @param int $count Entities count, default is 10
     * @return Tag[]
     */
    public function findAll($count = 10)
    {
        return $this->createQueryBuilder('t')
            ->orderBy('t.id', 'ASC')
            ->setMaxResults($count)
            ->getQuery()->getResult();
    }
}
