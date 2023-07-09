<?php

namespace Album\Service;

class AlbumService
{
    /**
     * Get variable config
     * @return array
     */
    public function getConfig(): array
    {
        return [
            "color_main" => "yellow",
            "color_background" => "red",
            "color_customer" => "black",
        ];
    }
}
