<?php

namespace Geek\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="theme")
 * @ORM\Entity(repositoryClass="Geek\BlogBundle\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255)
     */
    private $name;

    /**
     * @var  Post[]| Collection
     * @ORM\OneToMany(targetEntity="Geek\BlogBundle\Entity\Post", mappedBy="category")
     */
    private $posts;

    public  function  __construct ()  {
        $this->posts = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     *
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param Post $post
     *
     * @return Category
     */
    public function addPost(Post $post)
    {
        $this->posts[] = $post;
        $post->setCategory($this);
        return $this;
    }

    /**
     * @param Post $post
     */
    public function removePost (Post $post)
    {
        $this->posts->removeElement($post);
        $post->setCategory(null);
    }
}

