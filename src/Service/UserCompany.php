<?php

namespace SmallUser\Service;

use Doctrine\ORM\EntityManager;
use SmallUser\Mapper\HydratorUserCompany;


class UserCompany
{
    /** @var EntityManager */
    protected $entityManager;

    /**
     * Calculator constructor.
     * @param EntityManager $entityManager
     */
    public function __construct(
        EntityManager $entityManager
    ) {
        $this->entityManager = $entityManager;
    }

    /**
     * @param $id
     *
     * @return int
     */
    public function getCompany4Id($id)
    {
        /** @var \SmallUser\Entity\Repository\UserCompany $repository */
        $repository = $this->getEntityManager()->getRepository(\SmallUser\Entity\UserCompany::class);

        return $repository->getCompanyById(2);
    }

    /**
     * @return EntityManager
     */
    public function getEntityManager()
    {
        return $this->entityManager;
    }

}
