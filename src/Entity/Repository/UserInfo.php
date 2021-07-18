<?php

namespace SmallUser\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class UserInfo extends EntityRepository
{
    /**
     * @param $id
     *
     * @return null|\SmallUser\Entity\UserInfo
     */
    public function getUserInfo4Id($id)
    {
        $query = $this->createQueryBuilder('p')
            ->select('p')
            ->where('p.userid = :userid')
            ->setParameter('userid', $id)
            ->getQuery();

        return $query->getOneOrNullResult();
    }

    /**
     * @param $id
     *
     * @return null|\SmallUser\Entity\UserInfo
     */
    public function getUserNames()
    {
        $query = $this->createQueryBuilder('p')
            ->select('p.userid,p.firstname,p.lastname')
            ->where('p.isActive = 1')
            ->getQuery();

        return $query->getArrayResult();
    }
}