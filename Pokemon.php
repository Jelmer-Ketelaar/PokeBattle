<?php

class Pokemon
{
    //Creating the properties
    private static $livingPokemons;
    public $Name;
    public $energyType;
    public $hitPoints;
    public $Attacks;
    public $Weakness;
    public $Resistance;


    /**
     * Constructor die gebruikt wordt om een Pokemon object aan te maken
     * @param string $Name
     * @param mixed $energyType
     * @param int $hitPoints
     * @param mixed $Attacks
     * @param mixed $Weakness
     * @param mixed $Resistance
     */

    protected function __construct($Name, $energyType, $hitPoints, $Attacks, $Weakness, $Resistance)
    {
        $this->Name = $Name;
        $this->energyType = $energyType;
        $this->hitPoints = $hitPoints;
        $this->health = $hitPoints;
        $this->Attacks = $Attacks;
        $this->Weakness = $Weakness;
        $this->Resistance = $Resistance;

        self::$livingPokemons++;
    }

    public function __toString()
    {
        return json_encode($this);
    }

    public function battleTurn($target, $Attacks)
    {

        $energyType = $this->getEnergyType()->getName();
        $weaknessEnergyType = $target->getWeakness()->getWeaknessType();
        $multiplierEnergyType = $target->getWeakness()->getRecistanceValue();

        $resistanceEnergyType = $target->getResistance()->getWeaknessType();
        $resistance = $target->getResistance()->getRecistanceValue();

        if ($weaknessEnergyType == $energyType) {
            $damage = $Attacks->getAttackDamage() * $multiplierEnergyType;
            echo "<p>" . $this->getPokemonName() . " valt aan met " . $Attacks->getAttackName() . "! Dit doet niet heel veel damage  <br>(" . $damage . " Damage) </br></p>";
        } // Als de resistance overeenkomt met de energytupe dan word de resistance afgetrokken van de attackdamage.
        elseif ($resistanceEnergyType == $energyType) {
            $damage = $Attacks->getAttackDamage() - $resistance;
        else {
            $damage = $Attacks->getAttackDamage();
            echo $this->getPokemonName() . " valt aan met " . $Attacks->getAttackName() . " (" . $damage . " Damage)<br>";
        }

        $this->damageDone($damage, $target);
    }

    /**
     * Laat zien of de Pokemon dood is of hij laat zien hoeveel HP er nog over is.
     * @param int $damage
     * @param string $target
     */

    public function damageDone($damage, $target)
    {
        // Als de HP 0 is dan wordt er een Pokemon afgehaald
        if ($target->getHealth() <= 0) {
            self::$livingPokemons--;
        } // Laat zien hoeveel HP er nog over is.
        else {
        }
    }


    public static function getPopulation()
    {
        return self::$livingPokemons;
    }

    /**
     * @return string $name
     */
    private function getPokemonName()
    {
        return $this->Name;
    }

    /**
     * @return string $energyType
     */
    private function getEnergyType()
    {
        return $this->energyType;
    }

    /**
     * @return int $hitpoints
     */
    private function getHitpoints()
    {
        return $this->hitPoints;
    }

    /**
     * @return mixed $attacks
     */
    private function getAttack()
    {
        return $this->Attacks;
    }

    /**
     * @return mixed $weakness
     */
    private function getWeakness()
    {
        return $this->Weakness;
    }

    /**
     * @return mixed $resistance
     */
    private function getResistance()
    {
        return $this->Resistance;
    }

    /**
     * @return int $health
     */
    private function getHealth()
    {
        return $this->health;
    }
}
