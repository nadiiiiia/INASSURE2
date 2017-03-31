<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends BaseUser
{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="phone_number", type="integer", nullable=true)
     */
    private $phoneNumber;

    /**
     * @ORM\Column(name="address", type="string", nullable=true)
     */
    private $address;

    /**
     * @ORM\Column(name="picture_name", type="string", options={"default" = "icone.PNG"})
     *
     */
    private $pictureName;

    /**
     * @Assert\File(maxSize="500k")
     */
    private $file;

    /**
     * One User has Many Meets.
     * @ORM\OneToMany(targetEntity="Meet", mappedBy="customerId")
     */
    private $meetsCustomer;

    /**
     * One User has Many Meets.
     * @ORM\OneToMany(targetEntity="Meet", mappedBy="agentId")
     */
    private $meetsAgent;

    /**
     * One User has Many logs.
     */
    private $logs;

    /**
     * User constructor.
     *
     */
    public function __construct()
    {
     parent::__construct();
        $this->enabled = false;
        $this->locked = false;
        $this->expired = false;
        $this->roles = array();
        $this->credentialsExpired = false;
    }

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
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return integer
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param integer $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getLogs()
    {
        return $this->logs;
    }


    /**
     * @param mixed $logs
     */
    public function setLogs($logs)
    {
        $this->logs = $logs;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    protected function getUploadRootDir()
    {
        return __DIR__ . '/../../../../project/web/' . $this->getUploadDir();
    }

    protected function getUploadDir()
    {
        return 'uploads/pictures';
    }

    public function getWebPath()
    {
        return null === $this->pictureName ? null : $this->getUploadDir() . '/' . $this->pictureName;
    }

    public function uploadProfilePicture()
    {
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
        $this->pictureName = $this->file->getClientOriginalName();
        $this->file = null;
    }
    /**
     * @return string
     */
    public function getPictureName()
    {
        return $this->pictureName;
    }

    /**
     * @param string $pictureName
     */
    public function setPictureName($pictureName)
    {
        $this->pictureName = $pictureName;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get locked
     *
     * @return boolean 
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Get expired
     *
     * @return boolean 
     */
    public function getExpired()
    {
        return $this->expired;
    }

    /**
     * Get expiresAt
     *
     * @return \DateTime 
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * Get credentialsExpired
     *
     * @return boolean 
     */
    public function getCredentialsExpired()
    {
        return $this->credentialsExpired;
    }

    /**
     * Get credentialsExpireAt
     *
     * @return \DateTime 
     */
    public function getCredentialsExpireAt()
    {
        return $this->credentialsExpireAt;
    }

    /**
     * @return mixed
     */
    public function getMeetsCustomer()
    {
        return $this->meetsCustomer;
    }

    /**
     * @return mixed
     */
    public function getMeetsAgent()
    {
        return $this->meetsAgent;
    }

    /**
     * @param mixed $meetsCustomer
     */
    public function setMeetsCustomer($meetsCustomer)
    {
        $this->meetsCustomer = $meetsCustomer;
    }

    /**
     * @param mixed $meetsAgent
     */
    public function setMeetsAgent($meetsAgent)
    {
        $this->meetsAgent = $meetsAgent;
    }
}
