<?php

namespace Album\Traits\Service;

use Album\Controller\AlbumController;
use Album\Service\AlbumService;

trait AlbumServiceTrait
{
    /**
     * Get variable albumService
     * @return AlbumService
     */
    public function getAlbumService(): AlbumService
    {
        return $this->albumService;
    }

    /**
     * Set variable albumService
     * @param AlbumService $albumService
     * @return AlbumController
     */
    public function setAlbumService(AlbumService $albumService): self
    {
        $this->albumService = $albumService;
        return $this;
    }
}