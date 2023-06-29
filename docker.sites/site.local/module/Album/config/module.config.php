<?php

use Album\Controller\AlbumController;
use Album\Controller\Factory\AlbumControllerFactory;
use Album\Model\Album;
use Album\Model\AlbumTable;
use Album\Model\AlbumTableGateway;
use Album\Model\Factory\AlbumTableFactory;
use Album\Model\Factory\AlbumTableGatewayFactory;
use Laminas\Db\Adapter\AdapterInterface;
use Laminas\Db\ResultSet\ResultSet;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    "router" => [
        "routes" => [
            "album" => [
                "type"    => Segment::class,
                "options" => [
                    "route" => "/album[/:action[/:id]]",
                    "constraints" => [
                        "action" => "[a-zA-Z][a-zA-Z0-9_-]*",
                        "id"     => "[0-9]+",
                    ],
                    "defaults" => [
                        "controller" => AlbumController::class,
                        "action"     => "index",
                    ],
                ],
            ],
        ],
    ],
    
    "controllers" => [
        "factories" => [
            AlbumController::class => AlbumControllerFactory::class,
        ],
    ],
    "service_manager" => [
        "factories" => [
            Album::class => InvokableFactory::class,
            AlbumTable::class => AlbumTableFactory::class,
            AlbumTableGateway::class => AlbumTableGatewayFactory::class,
        ]
    ],
    "view_manager" => [
        "template_path_stack" => [
            "album" => __DIR__ . "/../view",
        ],
    ],
];
