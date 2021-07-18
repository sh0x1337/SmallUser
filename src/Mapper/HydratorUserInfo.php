<?php

namespace SmallUser\Mapper;

use Laminas\Hydrator\ClassMethodsHydrator;
use SmallUser\Entity\UserInfo;

class HydratorUserInfo extends ClassMethodsHydrator
{

    /**
     * Extract values from an object
     * @param  object $object
     * @return array
     * @throws \InvalidArgumentException
     */
    public function extract(object $object): array
    {
        if (!$object instanceof UserInfo) {
            throw new \InvalidArgumentException('$object must be an instance of Calculator');
        }
        /* @var $object UserInfo */
        $data = parent::extract($object);

        return $data;
    }

    /**
     * Hydrate $object with the provided $data.
     * @param  array $data
     * @param  object $object
     * @return UserInfo
     * @throws \InvalidArgumentException
     */
    public function hydrate(array $data, object $object): object
    {
        if (!$object instanceof UserInfo) {
            throw new \InvalidArgumentException('$object must be an instance of Calculator');
        }

        return parent::hydrate($data, $object);
    }
}