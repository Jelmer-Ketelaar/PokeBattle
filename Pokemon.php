<?php

class Pokemon
{
    public $Name;
    public $EnergyType;
    public $Hitpoints;
    public $Health;
    public $Attacks;
    public $Weakness;
    public $Resistance;

    public function __construct($Name, $EnergyType, $Hitpoints, $Health, $Attacks, $Weakness, $Resistance)
    {
        $this->Name = $Name;
        $this->EnergyType = $EnergyType;
        $this->Hitpoints = $Hitpoints;
        $this->Health = $Health;
        $this->Attacks = $Attacks;
        $this->Weakness = $Weakness;
        $this->Resistance = $Resistance;

        Statistics::addPokemon();
        Statistics::deletePokemon();
    }

    public function __toString()
    {
        return json_encode($this);
    }
}

