<?php

namespace Album\Controller;

use Album\Model\AlbumTable;
use Album\Service\AlbumService;
use Album\Traits\Service\AlbumServiceTrait;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class AlbumController extends AbstractActionController
{
    use AlbumServiceTrait;

    /** @var AlbumTable */
    protected AlbumTable $albumTable;

    /** @var AlbumService */
    protected AlbumService $albumService;

    /**
     * @param AlbumTable $albumTable
     * @param AlbumService $albumService
     */
    public function __construct(AlbumTable $albumTable, AlbumService $albumService)
    {
        $this->albumTable = $albumTable;
        $this->albumService = $albumService;
    }

    public function indexAction()
    {
        return new ViewModel([
            "albums" => $this->albumTable->fetchAll(),
        ]);
    }

    public function addAction()
    {
        return new ViewModel([]);
    }

    public function editAction()
    {
        return new ViewModel([]);
    }

    public function deleteAction()
    {
        return new ViewModel([]);
    }

    public function serviceAction()
    {
        return new ViewModel(["config" => $this->getAlbumService()->getConfig()]);
    }
}