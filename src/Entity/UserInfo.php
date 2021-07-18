<?php

namespace SmallUser\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * UserInfo
 *
 * @ORM\Table(name="user_info")
 * @ORM\Entity(repositoryClass="SmallUser\Entity\Repository\UserInfo")
 */
class UserInfo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=45, precision=0, scale=0, nullable=false, unique=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=45, precision=0, scale=0, nullable=false, unique=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=45, precision=0, scale=0, nullable=false, unique=false)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=45, precision=0, scale=0, nullable=false, unique=false)
     */
    private $tel;

    /**
     * @var integer
     *
     * @ORM\Column(name="group", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $group;

    /**
     * @var integer
     *
     * @ORM\Column(name="active", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $isActive;


    /**
     * Get userid.
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set firstname.
     *
     * @param string $firstname
     *
     * @return UserInfo
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname.
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname.
     *
     * @param string $lastname
     *
     * @return UserInfo
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname.
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set mail.
     *
     * @param string $mail
     *
     * @return UserInfo
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail.
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set tel.
     *
     * @param string $tel
     *
     * @return UserInfo
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel.
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set group.
     *
     * @param integer $group
     *
     * @return UserInfo
     */
    public function setGroup($group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group.
     *
     * @return integer
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set isActive.
     *
     * @param integer $isActive
     *
     * @return UserInfo
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive.
     *
     * @return integer
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
}
