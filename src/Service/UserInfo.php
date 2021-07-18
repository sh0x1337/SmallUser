<?php

namespace SmallUser\Service;

use Doctrine\ORM\EntityManager;
use SmallUser\Mapper\HydratorUserInfo;


class UserInfo
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

    public function getUserInfo4Id($id)
    {
        $entityManager = $this->getEntityManager();
        /** @var \SmallUser\Entity\Repository\UserInfo $repository */
        $repository = $entityManager->getRepository(\SmallUser\Entity\UserInfo::class);

        return $repository->getUserInfo4Id($id);
    }

    public function getUserInfos()
    {
        $entityManager = $this->getEntityManager();
        /** @var \SmallUser\Entity\Repository\UserInfo $repository */
        $repository = $entityManager->getRepository(\SmallUser\Entity\UserInfo::class);

        return $repository->getUserNames();
    }

    /**
     * @return EntityManager
     */
    public function getEntityManager()
    {
        return $this->entityManager;
    }

}
