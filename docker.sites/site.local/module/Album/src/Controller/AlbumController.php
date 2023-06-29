<?php

namespace Album\Controller;

use Album\Model\AlbumTable;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class AlbumController extends AbstractActionController
{
    /** @var AlbumTable */
    protected AlbumTable $albumTable;

    /**
     * @param AlbumTable $albumTable
     */
    public function __construct(AlbumTable $albumTable)
    {
        $this->albumTable = $albumTable;
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
}