<?php

namespace Geek\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Theme
 *
 * @ORM\Table(name="theme")
 * @ORM\Entity(repositoryClass="Geek\BlogBundle\Repository\ThemeRepository")
 */
class Theme
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
     * @ORM\OneToMany(targetEntity="Geek\BlogBundle\Entity\Post", mappedBy="theme")
     */
    private $posts;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Theme
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add post
     *
     * @param Post $post
     *
     * @return Theme
     */
    public function addPost(Post $post)
    {
        $this->posts[] = $post;
        $post->setTheme($this);
        return $this;
    }

    /**
     * Remove pst
     *
     * @param Post $post
     */
    public function removePost (Post $post)
    {
        $this->posts->removeElement($post);
        $post->setTheme(null);
    }

    public  function  __construct ()  {
        $this->posts = new ArrayCollection();
    }
}

