<?php

namespace Geek\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * User
 *
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
     * @ORM\Column(type="string", options={"default" = "ROLE_USER"})
     */
    private $role;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", options={"default" = false})
     */
    protected $locked;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true, options={"default" = true})
     */
    protected $enabled;

    /**
     * @ORM\OneToMany(targetEntity="Geek\BlogBundle\Entity\Comment", mappedBy="user")
     * @ORM\Column(type="string")
     */
    private $comments;

    /**
     * @ORM\OneToMany(targetEntity="Geek\BlogBundle\Entity\Post", mappedBy="user")
     * @ORM\Column(type="string")
     */
    private $posts;

    /**
     * Get id
     *
     * @return integer
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
     * @return User
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
     * Set username
     *
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
     * Set password
     *
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
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Get password
     *
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
            $this->getRole()
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
     * Set role
     *
     * @param string $role
     *
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
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
     * Add comment
     *
     * @param Comment $comment
     *
     * @return User
     */
    public function addComment(Comment $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param Comment $comment
     */
    public function removeComment(Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Add post
     *
     * @param Post $post
     *
     * @return User
     */
    public function addPost(Post $post)
    {
        $this->posts[] = $post;

        return $this;
    }

    /**
     * Remove post
     *
     * @param Post $post
     */
    public function removePost (Post $post)
    {
        $this->posts->removeElement($post);
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->posts = new ArrayCollection();
    }

}

