<?php

class Pikachu extends Pokemon
{
    /** Constructor wordt uitgevoerd als er een nieuwe Pikachu class word aangemaakt.
     * @param string $name
     */
    public function __construct($name)
    {
        $energyType = new EnergyType('Lightning');
        $hitpoints = 60;
        $attacks = array(
            'Electric Ring' => new Attacks('Electric Ring', 50),
            'Pika Punch' => new Attacks('Pika Punch', 20)
        );

        $weakness = new Weakness('Fire', 1.5);
        $resistance = new Resistance('Fighting', 20);
        /**
         * Constructor die gebruikt wordt om een Pokemon object aan te maken.
         * @param string $name
         * @param string $energyType
         * @param int $hitpoints
         * @param mixed $attacks
         * @param mixed $weakness
         * @param mixed $resistance
         */
        parent::__construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance);
    }
}
