<?php

namespace SmallUser\Mapper;

use Laminas\Hydrator\ClassMethodsHydrator;
use SmallUser\Entity\UserCompany;

class HydratorUserCompany extends ClassMethodsHydrator
{

    /**
     * Extract values from an object
     * @param  object $object
     * @return array
     * @throws \InvalidArgumentException
     */
    public function extract(object $object): array
    {
        if (!$object instanceof UserCompany) {
            throw new \InvalidArgumentException('$object must be an instance of Calculator');
        }
        /* @var $object UserCompany */
        $data = parent::extract($object);

        return $data;
    }

    /**
     * Hydrate $object with the provided $data.
     * @param  array $data
     * @param  object $object
     * @return UserCompany
     * @throws \InvalidArgumentException
     */
    public function hydrate(array $data, object $object): object
    {
        if (!$object instanceof UserCompany) {
            throw new \InvalidArgumentException('$object must be an instance of Calculator');
        }

        return parent::hydrate($data, $object);
    }
}