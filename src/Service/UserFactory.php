<?php

namespace SmallUser\Service;

use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;
use Laminas\Mvc\Controller\PluginManager;
use Laminas\ServiceManager\Factory\FactoryInterface;

class UserFactory implements FactoryInterface
{
    /** @var  string*/
    protected $className = User::class;

    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return mixed
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @noinspection PhpParamsInspection */
        return new $this->className(
            $container->get(UserAuthFactory::class),
            $container->get('small_user_login_form'),
            $container->get('config')['small-user'],
            $container->get(PluginManager::class),
            $container->get(EntityManager::class)
        );
    }

}