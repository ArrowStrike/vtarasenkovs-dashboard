<?php

namespace DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="DashboardBundle\Repository\MessageRepository")
 */
class Message
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
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Email(
     *     message = "Sorry, but the email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(
     *     min=4,
     *     max=50,
     *     minMessage = "Sorry, but username must be at least 4 characters long",
     *     maxMessage = "Sorry, but username cannot be longer than 50 characters"
     * )
     * @Assert\Regex(
     *     pattern="/^[a-zA-Z]+$/",
     *     message="Your name must contain only alphabet chars"
     * )
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string")
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 10,
     *      max = 150,
     *      minMessage = "Sorry, but your message must be at least 10 characters long",
     *      maxMessage = "Sorry, but your message cannot be longer than 150 characters"
     * )
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;


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
     * Set email
     *
     * @param string $email
     *
     * @return Message
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Message
     */
    public function setUsername($username)
    {
        $this->username = $username;

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
     * Set message
     *
     * @param string $message
     *
     * @return Message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Message
     */
    public function setCreatedAt()
    {
        $now = new\DateTime('now');
        $this->createdAt = $now;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setAll($username, $email, $message)
    {
        $this->setUsername($username);
        $this->setEmail($email);
        $this->setMessage($message);
        $this->setCreatedAt();
    }

    public function getAll()
    {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'email' => $this->email,
            'message' => $this->message,
            'createdAt' => $this->createdAt,
        ];
    }
}

