<?php

namespace App\Algorithms\Php;

class ClientReading
{
    private $id;
    private $reading;

    public function __construct($id, $reading)
    {
        $this->id = $id;
        $this->reading = $reading;
    }

    public function __toString()
    {
        return $this->id.' '.$this->reading;
    }

    public function getClientReading()
    {
        return $this->reading;
    }
}
