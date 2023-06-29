<?php

namespace Album\Model;

use ArrayObject;

class Album extends ArrayObject
{
    public $id;
    public $artist;
    public $title;

    /**
     * @return void
     */
    public function exchangeArray($array): void
    {
        $this->id     = !empty($array['id']) ? $array['id'] : null;
        $this->artist = !empty($array['artist']) ? $array['artist'] : null;
        $this->title  = !empty($array['title']) ? $array['title'] : null;
    }
}