<?php

class Resistance
{
    public $EnergyType;
    public $reducedDamage;

    public function __construct($EnergyType, $Value)
    {
        $this->EnergyType = $EnergyType;
        $this->reducedDamage = $Value;
    }

    public function getResistanceType()
    {
        return $this->EnergyType;
    }

    public function getReducedDamage()
    {
        return $this->reducedDamage;
    }
}

