<?php

namespace SmallUser\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class UserCompany extends EntityRepository
{
    /**
     * @param $id
     *
     * @return int
     */
    public function getCompanyById($id)
    {
        $query = $this->createQueryBuilder('p')
            ->select('p.company')
            ->where('p.userid = :userid')
            ->setParameter('userid', $id)
            ->getQuery();

        return $query->getSingleScalarResult();
    }

}