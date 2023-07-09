<?php

namespace Album\Service\Factory;

use Album\Service\AlbumService;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;

class AlbumServiceFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): AlbumService
    {
        return new AlbumService();
    }
}