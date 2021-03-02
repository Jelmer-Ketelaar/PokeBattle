<?php

class Pokemon
{
    public $Name;
    public $energyType;
    public $Hitpoints;
    public $Health;
    public $Attacks;
    public $Weakness;
    public $Resistance;


    protected function __construct($Name, $energyType, $Hitpoints, $Health, $Attacks, $Weakness, $Resistance)
    {
        $this->Name = $Name;
        $this->energyType = $energyType;
        $this->Hitpoints = $Hitpoints;
        $this->Health = $Health;
        $this->Attacks = $Attacks;
        $this->Weakness = $Weakness;
        $this->Resistance = $Resistance;

        statistics::addPokemon();
        statistics::deletePokemon();
    }

    public function __toString()
    {
        return json_encode($this);
    }
}

