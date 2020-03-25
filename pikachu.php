<?php

class Pikachu extends Pokemon
{
    public function __construct($Name)
    {
        $EnergyType = new EnergyType('Lightning');
        $Hitpoints = 60;
        $Health = $Hitpoints;
        $Attacks = [
            new Attacks("Electric Ring", 50),
            new Attacks("Pika Punch", 20)
        ];
        $Weakness = new Weakness("Fire", 1.5);
        $Resistance = new Resistance("Fighting", 20);

        parent::__construct($Name, $EnergyType, $Hitpoints, $Health, $Attacks, $Weakness, $Resistance);

    }
}
