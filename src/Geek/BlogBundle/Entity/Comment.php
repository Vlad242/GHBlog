<?php

namespace Geek\BlogBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="Geek\BlogBundle\Repository\CommentRepository")
 */
class Comment
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
     * @ORM\Column(name="content", type="string", length=1500)
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="Geek\BlogBundle\Entity\User", inversedBy="comments")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Geek\BlogBundle\Entity\Post", inversedBy="comments")
     */
    private $post;

    /**
     * @var \DateTime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @var \DateTime $updated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;

    /**
     * @var \DateTime $contentChanged
     *
     * @ORM\Column(name="content_changed", type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="change", field={"content"})
     */
    private $contentChanged;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $Content
     *
     * @return Comment
     */
    public function setContent($Content)
    {
        $this->content = $Content;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param User $user
     *
     * @return Comment
     */
    public function setUser(User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param Post $post
     *
     * @return Comment
     */
    public function setPost(Post $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * @return Post
     */
    public function getPost()
    {
        return $this->post;
    }


    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @return \DateTime
     */
    public function getContentChanged()
    {
        return $this->contentChanged;
    }
}

