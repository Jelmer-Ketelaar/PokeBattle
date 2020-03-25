<?php

class Attacks
{
    public $Name;
    public $Hitpoints;

    public function __construct($Name, $Hitpoints)
    {
        $this->Name = $Name;
        $this->Hitpoints = $Hitpoints;
    }
}


