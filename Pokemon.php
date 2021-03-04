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
        //Methods
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

        $energyType = $target->getEnergyType()->getName();
        $weakness = $target->getWeakness()->getWeaknessType();
        $multiplier = $target->getWeakness()->getRecistanceValue();

        $resistance = $target->getResistance()->getWeaknessType();
        $resistance = $target->getResistance()->getRecistanceValue();

        // If the weakness matches the energy type of the attacking Pokemon, the multiplier is used.
        if ($weakness == $energyType) {
            $damage = $Attacks->getAttackDamage() * $multiplier;
            echo "<p>" . $this->getPokemonName() . " valt aan met " . $Attacks->getAttackName() . "! Dit doet niet heel veel damage  <br>(" . $damage . " Damage) </br></p>";
        } // Als de resistance overeenkomt met de energytupe dan word de resistance afgetrokken van de attackdamage.
        elseif ($resistance == $energyType) {
            $damage = $Attacks->getAttackDamage() - $resistance;
            echo "<p>" . $this->getPokemonName() . " valt aan met " . $Attacks->getAttackName() . "! Dit doet niet heel veel damage </p>";
            echo " (<p>" . $damage . " Damage)</p>";
        } // Shows the attack with the damage that has been done.
        else {
            $damage = $Attacks->getAttackDamage();
            echo $this->getPokemonName() . " valt aan met " . $Attacks->getAttackName() . " (" . $damage . " Damage)<br>";
        }

        $this->damageDone($damage, $target);
    }
    /**
     * Laat zien of de Pokemon dood is of hij laat zien hoeveel HP er nog over is.
     * @param int $damage
     * @param mixed $target
     */

    public function damageDone($damage, $target)
    {
        // Als de HP 0 is dan wordt er een Pokemon afgehaald
        $this->health -= $damage;
        if ($target->getHealth() <= 0) {
            echo $target->getPokemonName() . " is dead!<br>";
            self::$livingPokemons--;
        } // Laat zien hoeveel HP er nog over is.
        else {
            echo "<p>" . $target->getPokemonName() . " heeft nu nog " . $target->getHealth() . " hp over!</p>";
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
