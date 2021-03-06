<?php

namespace Geek\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Geek\BlogBundle\Repository\UserRepository")
 */
class User implements AdvancedUserInterface
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
     * @Assert\NotBlank(message="User's name should not be blank.")
     * @Assert\Length(max="100")
     * @Assert\Regex("/^[-a-zA-Z0-9_ \s]+$/", message="The name must contain only letters, digits, space, underscore and hyphen.")
     * @ORM\Column(type="string", length=191)
     */
    private $name;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Username should not be blank.")
     * @Assert\Length(max="30")
     * @Assert\Regex("/^[-a-zA-Z0-9_\s]+$/", message="Username must contain only letters, digits, underscore and hyphen.")
     * @ORM\Column(type="string", length=30, unique=true)
     */
    private $username;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Email should not be blank.")
     * @Assert\Length(max="30")
     * @ORM\Column(type="string", length=30, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=191)
     */
    private $password;

    /**
     * @var string
     */
    private $plainPassword;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $roles;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean")
     */
    protected $locked;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $enabled;

    /**
     * @var  Comment[]| Collection
     * @ORM\OneToMany(targetEntity="Geek\BlogBundle\Entity\Comment", mappedBy="user")
     */
    private $comments;

    /**
     * @var  Post[]| Collection
     * @ORM\OneToMany(targetEntity="Geek\BlogBundle\Entity\Post", mappedBy="user")
     */
    private $posts;

    /**
     * @var  Post[]| Collection
     *
     * @ORM\ManyToMany(targetEntity="Geek\BlogBundle\Entity\Post", mappedBy="likes")
     */
    private $likes;

    /**
     * @var  ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Geek\BlogBundle\Entity\User")
     * @ORM\JoinTable(name="subscribers",
     *     joinColumns={@ORM\JoinColumn(name="user_source", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="user_target", referencedColumnName="id")})
     */
    private $subscribers;


    public function __construct()
    {
        $this->setRoles('ROLE_USER');
        $this->setLocked(false);
        $this->setEnabled(true);
        $this->comments = new ArrayCollection();
        $this->posts = new ArrayCollection();
        $this->likes = new ArrayCollection();
        $this->subscribers = new ArrayCollection();
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     *
     * @return User
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
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * {@inheritdoc}
     */
    public function eraseCredentials()
    {
        $this->setPlainPassword(null);
    }

    /**
     * @return bool
     */
    public function isAccountNonExpired()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isAccountNonLocked()
    {
        return !$this->isLocked();
    }

    /**
     * @return bool
     */
    public function isCredentialsNonExpired()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @return boolean
     */
    public function isLocked()
    {
        return $this->locked;
    }

    /**
     * @return boolean
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * @param boolean $locked
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;
    }

    public function getRoles()
    {
        return [
            $this->roles
        ];
    }

    /**
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * @param string $roles
     *
     * @return User
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @param string $pass
     */
    public function setPlainPassword($pass)
    {
        $this->plainPassword = $pass;
    }

    /**
     * @return string
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * @param Comment $comment
     *
     * @return User
     */
    public function addComment(Comment $comment)
    {
        $this->comments[] = $comment;
        $comment->setUser($this);

        return $this;
    }

    /**
     * @param Comment $comment
     */
    public function removeComment(Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * @param Post $post
     *
     * @return User
     */
    public function addPost(Post $post)
    {
        $this->posts[] = $post;
        $post->setUser($this);
        return $this;
    }

    /**
     * @param Post $post
     */
    public function removePost (Post $post)
    {
        $this->posts->removeElement($post);
    }

    /**
     * @param string $role
     *
     * @return User
     */
    public function addRole($role)
    {
        $this->roles[] = $role;

        return $this;
    }

    /**
     * @return Collection|Post[]
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * @param Collection|Post[] $likes
     */
    public function setLikes($likes)
    {
        $this->likes = $likes;
    }

    /**
     * @param Post $post
     *
     * @return User
     */
    public function addLikes(Post $post)
    {
        $this->likes[] = $post;
        $post->setUser($this);
        return $this;
    }

    /**
     * @param Post $post
     */
    public function removeLike (Post $post)
    {
        $this->likes->removeElement($post);
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return ArrayCollection
     */
    public function getSubscribers()
    {
        return $this->subscribers->toArray();
    }

    /**
     * @return int
     */
    public function getSubscriberCount()
    {
        return $this->subscribers->count();
    }

    /**
     * @param User $user
     * @return bool
     */
    public function haveThisSubscriber(User $user)
    {
        if ($this->subscribers->contains($user)){
            return true;
        }
        return false;
    }

    /**
     * @param User $user
     */
    public function addSubscriber(User $user)
    {
        if (!$this->subscribers->contains($user)){
            $this->subscribers->add($user);
            $user->addSubscriber($this);
        }
    }

    /**
     * @param User $user
     */
    public function removeSubscriber (User $user)
    {
        if ($this->subscribers->contains($user)){
            $this->subscribers->removeElement($user);
            $user->removeSubscriber($this);
        }
    }
}

