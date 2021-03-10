<?php

class Charmeleon extends Pokemon
{

    public function __construct($name)
    {
        $EnergyType = new EnergyType("Fire");
        $hitPoints = 60;
        $Attacks = [
            new Attacks("Head Butt", 10),
            new Attacks("Flare", 30)
        ];
        $weakness = new weakness("Water", 2);
        $resistance = new resistance("Lightning", 10);

        parent::__construct($name, $EnergyType, $hitPoints, $Attacks, $weakness, $resistance);
    }
}
