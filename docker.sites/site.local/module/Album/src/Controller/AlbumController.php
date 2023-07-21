<?php

namespace Album\Controller;

use Album\Form\AlbumFirstForm;
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

    /** @var AlbumFirstForm $albumFirstForm */
    protected AlbumFirstForm $albumFirstForm;

    /**
     * @param AlbumTable $albumTable
     * @param AlbumService $albumService
     * @param AlbumFirstForm $albumFirstForm
     */
    public function __construct(AlbumTable $albumTable, AlbumService $albumService, AlbumFirstForm $albumFirstForm)
    {
        $this->albumTable = $albumTable;
        $this->albumService = $albumService;
        $this->albumFirstForm = $albumFirstForm;
    }

    public function indexAction()
    {
        return new ViewModel([
            "albums" => $this->albumTable->fetchAll(),
        ]);
    }

    /**
     * @return ViewModel
     */
    public function addAction(): ViewModel
    {
        return new ViewModel(["albumFirstForm" => $this->getAlbumFirstForm()]);
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