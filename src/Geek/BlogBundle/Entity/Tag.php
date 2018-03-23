<?php

namespace Geek\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Geek\BlogBundle\Repository\TagRepository")
 */
class Tag
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
     *
     * @ORM\ManyToMany(targetEntity="Geek\BlogBundle\Entity\Post", inversedBy="tags")
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
     * @return Collection|Post[]
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * @param string $name
     *
     * @return Tag
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
     * @param Collection|Post[] $posts
     */
    public function setPosts($posts): void
    {
        $this->posts = $posts;
    }

    /**
     * @param Post $post
     *
     * @return Tag
     */
    public function addPost(Post $post)
    {
        $this->posts[] = $post;
        return $this;
    }

    /**
     * @param Post $post
     */
    public function removePost (Post $post)
    {
        $this->posts->removeElement($post);
    }

}

