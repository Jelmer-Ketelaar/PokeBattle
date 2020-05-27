<?php

//Class attacks is created with a Name and Hitpoints
class Attacks
{
    public $Name;
    public $Hitpoints;

    public function __construct($Name, $Hitpoints)
    {
        $this->Name = $Name;
        $this->Hitpoints = $Hitpoints;
    }

    //If the weakness enerytpe is equal to the energy type of the attacking pokemon, the damage x the multiplier is done.
    public function multiplyDamage($multiplier)
    {
        $this->Hitpoints = $this->Hitpoints * $multiplier;
    }

    //If the resistance energy type is equal to the energy type of the attacking pokemon, the damage - resistance is done.
    public function reduceDamage($resistance)
    {
        $this->Hitpoints = $this->Hitpoints - $resistance;
    }

    public function getName()
    {
        return $this->Name;
    }

    public function getDamage()
    {
        return $this->Hitpoints;
    }

}


