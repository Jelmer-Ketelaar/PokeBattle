<?php

class EnergyType
{
    public $name;
    const Fire = 'Fire';
    const Water = 'Water';
    const Lightning = 'Lighting';
    const Fighting = 'Fighting';


    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}