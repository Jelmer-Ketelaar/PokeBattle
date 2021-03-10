<?php

class Pikachu extends Pokemon
{
    /** Constructor wordt uitgevoerd als er een nieuwe Pikachu class word aangemaakt.
     * @param string $name
     */
    public function __construct($name)
    {
        $energyType = new EnergyType('Lightning');
        $hitPoints = 60;
        $attacks = array(
            new Attacks('Electric Ring', 50),
            new Attacks('Pika Punch', 20)
        );

        $weakness = new weakness('Fire', 1.5);
        $resistance = new resistance('Fighting', 20);
        /**
         * Constructor die gebruikt wordt om een Pokemon object aan te maken.
         * @param string $name
         * @param string $energyType
         * @param int $hitPoints
         * @param mixed $attacks
         * @param mixed $weakness
         * @param mixed $resistance
         */
        parent::__construct($name, $energyType, $hitPoints, $attacks, $weakness, $resistance);
    }
}
