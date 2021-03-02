<?php

class Weakness
{
    public $energyType;
    public $multiplier;

    public function __construct($energyType, $multiplier)
    {
        $this->energyType = $energyType;
        $this->multiplier = $multiplier;
    }

    public function getWeaknessType()
    {
        return $this->energyType;
    }

    public function getWeaknessMultiplier()
    {
        return $this->multiplier;
    }
}