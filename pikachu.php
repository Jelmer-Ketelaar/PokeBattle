<?php

class Pikachu extends Pokemon
{
    /** Constructor wordt uitgevoerd als er een nieuwe Pikachu class word aangemaakt.
     * @param string $Name
     */
    public function __construct($Name)
    {
        $energyType = new EnergyType('Lightning');
        $hitPoints = 60;
        $Attacks = array(
            new Attacks('Electric Ring', 50),
            new Attacks('Pika Punch', 20)
        );

        $Weakness = new Weakness('Fire', 1.5);
        $Resistance = new Resistance('Fighting', 20);
        /**
         * Constructor die gebruikt wordt om een Pokemon object aan te maken.
         * @param string $Name
         * @param string $energyType
         * @param int $hitPoints
         * @param mixed $Attacks
         * @param mixed $Weakness
         * @param mixed $Resistance
         */
        parent::__construct($Name, $energyType, $hitPoints, $Attacks, $Weakness, $Resistance);
    }
}
