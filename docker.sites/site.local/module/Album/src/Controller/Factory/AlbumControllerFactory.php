<?php

namespace Album\Controller\Factory;

use Album\Controller\AlbumController;
use Album\Model\AlbumTable;
use Album\Service\AlbumService;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

class AlbumControllerFactory implements FactoryInterface
{

    /**
     * @param ContainerInterface $container
     * @param $requestedName
     * @param array|null $options
     * @return AlbumController
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): AlbumController
    {
        /** @var AlbumTable  $albumTable */
        $albumTable = $container->get(AlbumTable::class);
        /** @var AlbumService $albumService */
        $albumService = $container->get(AlbumService::class);
        return new AlbumController($albumTable, $albumService);
    }
}