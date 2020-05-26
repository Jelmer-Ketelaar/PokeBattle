<?php

class Weakness
{
    public $EnergyType;
    public $Multiplier;

    public function __construct($EnergyType, $Multiplier) {
        $this->EnergyType = $EnergyType;
        $this->Multiplier = $Multiplier;
    }

    public function getWeaknessType() {
        return $this->EnergyType;
    }

    public function getWeaknessMultiplier() {
        return $this->Multiplier;
    }
}