<?php

class Charmeleon extends Pokemon
{

    public function __construct($Name)
    {
        $EnergyType = new EnergyType("Fire");
        $hitPoints = 60;
        $Attacks = [
            new Attacks("Head Butt", 10),
            new Attacks("Flare", 30)
        ];
        $Weakness = new Weakness("Water", 2);
        $Resistance = new Resistance("Lightning", 10);

        parent::__construct($Name, $EnergyType, $hitPoints, $Attacks, $Weakness, $Resistance);
    }
}
