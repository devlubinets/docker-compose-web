<?php

namespace Album\Form;

use Laminas\Form\Element\Email;
use Laminas\Form\Element\Submit;
use Laminas\Form\Element\Text;
use Laminas\Form\Form;

class AlbumFirstForm extends Form
{
    public function init()
    {
        parent::init();

        $this->add([
            "type"  => Text::class,
            "name" => "name",
            "options" => [
                "label" => "Your name",
            ],
        ]);
        
        $this->add([
            "type" => Email::class,
            "name" => "email",
            "options" => [
                "label" => "Your email address",
            ],
        ]);
        
        $this->add([
            "type"  => Submit::class,
            "name" => "send",
            "attributes" => [
                "value" => "Submit",
            ],
        ]);
    }
}