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
     * @param Post $slug
     * @return Post
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findById($slug)
    {
        return $this->createQueryBuilder('p')
            ->where('p.slug = :slug')
            ->setParameter('slug', $slug)
            ->getQuery()->getOneOrNullResult();
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

    /**
     * @param Post $post
     * @param User $user
     * @return array
     */
    public function findLikes(Post $post, User $user)
    {
        return $this->createQueryBuilder('p')
            ->leftJoin('p.likes', 'user')
            ->where('user.id = :user')
            ->andWhere('p.id = :post')
            ->setParameters([
                'user' => $user,
                'post' => $post
            ])
            ->getQuery()->getResult();
    }


    /**
     * @param User $user
     * @param $date
     * @return \Doctrine\ORM\Query|Post[]
     */
    public function findForSend(User $user,\DateTime $date)
    {
        return $this->createQueryBuilder('p')
            ->where('p.user = :user')
            ->andWhere('p.created >= :date')
            ->setParameters([
                'user' => $user,
                'date' => $date
            ])
            ->getQuery();
    }
}
