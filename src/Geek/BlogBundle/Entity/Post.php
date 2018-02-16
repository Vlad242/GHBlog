<?php

namespace Geek\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
/**
 * @ORM\Entity(repositoryClass="Geek\BlogBundle\Repository\PostRepository")
 */
class Post
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
     * @ORM\Column(name="Content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=255)
     */
    private $title;

    /**
     * @ORM\ManyToOne(targetEntity="Geek\BlogBundle\Entity\User", inversedBy="posts")
     */
    private $user;

    /**
     * @var  Tag[]| Collection
     *
     * @ORM\ManyToMany(targetEntity="Geek\BlogBundle\Entity\Tag", mappedBy="posts")
     */
    private $tags;

    /**
     * @ORM\ManyToOne(targetEntity="Geek\BlogBundle\Entity\Category", inversedBy="posts")
     */
    private $category;

    /**
     *@var  Comment[]| Collection
     *
     * @ORM\OneToMany(targetEntity="Geek\BlogBundle\Entity\Comment", mappedBy="post", orphanRemoval=true)
     */
    private $comments;

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
     * @Gedmo\Timestampable(on="change", field={"title", "content"})
     */
    private $contentChanged;

    /**
     * @Gedmo\Slug(fields={"title", "id"})
     * @ORM\Column(length=128, unique=true)
     */
    private $slug;

    /**
     * @var  User[]| Collection
     *
     * @ORM\ManyToMany(targetEntity="Geek\BlogBundle\Entity\User", inversedBy="likes")
     */
    private $likes;

    public  function  __construct ()  {
        $this->comments = new ArrayCollection();
        $this->tags = new ArrayCollection();
        $this->likes = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;

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
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param User $user
     *
     * @return $this
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
     * @param Category $category
     *
     * @return $this
     */
    public function setCategory(Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param Tag $tag
     *
     * @return $this
     */
    public function addTag(Tag $tag)
    {
        $tag->addPost($this);
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * @param Tag $tag
     */
    public function removeTag (Tag $tag)
    {
        $this->tags->removeElement($tag);
    }

    /**
     * @param Comment $comment
     *
     * @return $this
     */
    public function addComment(Comment $comment)
    {
        $this->comments[] = $comment;
        $comment->setPost($this);

        return $this;
    }

    /**
     * @param Comment $comment
     * @internal param Post $post
     */
    public function removeComment (Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * @return ArrayCollection|Collection|Tag[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @return ArrayCollection|Collection|Comment[]
     */
    public function getComments()
    {
        return $this->comments;
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

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @return Collection|User[]
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * @param Collection|User[] $likes
     */
    public function setLikes($likes)
    {
        $this->likes = $likes;
    }


    /**
     * @param User $user
     * @return $this
     */
    public function addLike(User $user)
    {
        $user->addPost($this);
        $this->likes[] = $user;

        return $this;
    }

    /**
     * @param User $user
     */
    public function removeLike (User $user)
    {
        $this->likes->removeElement($user);
    }

    /**
     * @return int
     */
    public  function getLikeCount()
    {
        return $this->likes->count();
    }

    /**
     * @param User $user
     * @return bool
     */
    public function isLiked(User $user)
    {
        if ($this->likes->contains($user)){
            return true;
        }
        return false;
    }
}

