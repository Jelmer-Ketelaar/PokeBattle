<?php

//Class attacks is created with a Name and Hitpoints
class Attacks
{
    public $Name;
    public $hitPoints;

    public function __construct($Name, $hitPoints)
    {
        $this->Name = $Name;
        $this->hitPoints = $hitPoints;
    }

    //If the weakness energytpe is equal to the energy type of the attacking pokemon, the damage x the multiplier is done.
    public function multiplyDamage($Multiplier)
    {
        $this->hitPoints = $this->hitPoints * $Multiplier;
    }

    //If the resistance energy type is equal to the energy type of the attacking pokemon, the damage - resistance is done.
    public function reduceDamage($Resistance)
    {
        $this->hitPoints = $this->hitPoints - $Resistance;
    }

    //Return name
    public function getAttackName()
    {
        return $this->Name;
    }

    //Return Hitpoints
    public function getAttackDamage()
    {
        return $this->hitPoints;
    }
}
