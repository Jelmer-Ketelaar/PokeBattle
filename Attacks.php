<?php

//Class attacks is created with a name and Hitpoints
class Attacks
{
    public $name;
    public $hitPoints;

    public function __construct($name, $hitPoints)
    {
        $this->name = $name;
        $this->hitPoints = $hitPoints;
    }

    //If the weakness energytpe is equal to the energy type of the attacking pokemon, the damage x the multiplier is done.
    public function multiplyDamage($Multiplier)
    {
        $this->hitPoints = $this->hitPoints * $Multiplier;
    }

    //If the resistance energy type is equal to the energy type of the attacking pokemon, the damage - resistance is done.
    public function reduceDamage($resistance)
    {
        $this->hitPoints = $this->hitPoints - $resistance;
    }

    //Return name
    public function getAttackName()
    {
        return $this->name;
    }

    //Return Hitpoints
    public function getAttackDamage()
    {
        return $this->hitPoints;
    }
}
