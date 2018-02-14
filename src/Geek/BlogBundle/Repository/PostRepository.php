<?php

namespace Geek\BlogBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Geek\BlogBundle\Entity\Category;
use Geek\BlogBundle\Entity\Post;
use Geek\BlogBundle\Entity\Tag;

class PostRepository extends EntityRepository
{
    /**
     * @return \Doctrine\ORM\Query
     */
    public function findAllQuery()
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.date', 'DESC')
            ->getQuery()
            ;
    }

    /**
     * @param Tag $tag
     * @return \Doctrine\ORM\Query
     */
    public function findByTag(Tag $tag)
    {
        return $this->createQueryBuilder('t')
            ->leftJoin('t.tags', 'tg')
            ->where('tg.id = :tag')
            ->setParameter('tag', $tag)
            ->getQuery()
        ;
    }

    /**
     * @param Category $category
     * @return \Doctrine\ORM\Query
     */
    public function findByCategory(Category $category)
    {
        return $this->createQueryBuilder('t')
            ->leftJoin('t.category', 'ct')
            ->where('ct.id = :category')
            ->setParameter('category', $category)
            ->getQuery()
            ;
    }

    /**
     * @param Post $id
     * @return Post[]
     */
    public function findById($id)
    {
        return $this->createQueryBuilder('p')
            ->where('p.id = :id')
            ->setParameter('id', $id)
            ->getQuery()->getResult();
    }
}
