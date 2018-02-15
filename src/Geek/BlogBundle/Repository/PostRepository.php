<?php

namespace Geek\BlogBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Geek\BlogBundle\Entity\Category;
use Geek\BlogBundle\Entity\Post;
use Geek\BlogBundle\Entity\Tag;
use Geek\BlogBundle\Entity\User;

class PostRepository extends EntityRepository
{
    /**
     * @return \Doctrine\ORM\Query
     */
    public function findAllQuery()
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.created', 'DESC')
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

    /**
     * @param User $user
     * @return \Doctrine\ORM\Query|Post[]
     */
    public function findByUser(User $user)
    {
        return $this->createQueryBuilder('p')
            ->where('p.user = :user')
            ->setParameter('user', $user)
            ->getQuery();
    }

    /**
     * @param string $str
     * @return \Doctrine\ORM\Query
     */
    public function findByString($str)
    {
        return $this->createQueryBuilder('p')
            ->where('p.title LIKE :str')
            ->orWhere('p.content LIKE :str')
            ->setParameter('str', $str)
            ->getQuery();
    }
}
