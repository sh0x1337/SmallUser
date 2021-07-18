<?php

namespace SmallUser\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * UserCompany
 *
 * @ORM\Table(name="user_company")
 * @ORM\Entity(repositoryClass="SmallUser\Entity\Repository\UserCompany")
 */
class UserCompany
{
    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="companyid", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $company;


    /**
     * Set userid.
     *
     * @param integer $userid
     *
     * @return UserCompany
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

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
     * Set company.
     *
     * @param integer $company
     *
     * @return UserCompany
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company.
     *
     * @return integer
     */
    public function getCompany()
    {
        return $this->company;
    }
}
