<?php

class Pokemon
{
    //Creating the properties
    static $livingPokemons;
    static $pokemons = [];
    public $name;
    public $energyType;
    public $hitPoints;
    public $attacks;
    public $weakness;
    public $resistance;

    /**
     * Constructor die gebruikt wordt om een Pokemon object aan te maken
     * @param string $name
     * @param mixed $energyType
     * @param int $hitPoints
     * @param mixed $attacks
     * @param mixed $weakness
     * @param mixed $resistance
     */

    protected function __construct($name, $energyType, $hitPoints, $attacks, $weakness, $resistance)
    {
        //Methods
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitPoints = $hitPoints;
        $this->health = $hitPoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        // Verhoogt de levende pokemons met 1 elke keer als de constructor word uitgevoerd.
        self::$livingPokemons++;
    }

    public function battleTurn($target, $attacks)
    {
        $energyType = $target->getEnergyType()->getname();
        $weaknessEnergyType = $target->getweakness()->getweaknessType();
        $multiplierEnergyType = $target->getweakness()->getweaknessValue();

        $resistanceEnergyType = $target->getresistance()->getresistanceType();
        $resistance = $target->getresistance()->getresistanceValue();

        // If the weakness matches the energy type of the attacking Pokemon, the multiplier is used.
        if ($weaknessEnergyType == $energyType) {
            $damage = $attacks->getAttackdamage() * $multiplierEnergyType;
            echo "<p>" . $this->getPokemonByname() . " valt aan met " . $attacks->getAttackname() . "! Dit doet niet heel veel damage </p>";
            echo " <p>" . $damage . " damage </p>";
        }

        // Als de resistance overeenkomt met de energytupe dan word de resistance afgetrokken van de attackdamage.
        elseif ($resistanceEnergyType == $energyType) {
            $damage = $attacks->getAttackdamage() - $resistance;
            echo "<p>" . $this->getPokemonByname() . " valt aan met " . $attacks->getAttackname() . "! Dit doet niet heel veel damage </p>";
            echo " <p>" . $damage . " damage </p>";
        }

        // Shows the attack with the damage that has been done.
        else {
            $damage = $attacks->getAttackdamage();
            echo $this->getPokemonByname() . " valt aan met " . $attacks->getAttackname() . "<p> " . $damage . " damage</p>";
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
        $target->health -= $damage;
        if ($target->getHealth() <= 0) {
            echo $target->getPokemonByname()  .  " Is verslagen!<br>";
            self::$livingPokemons--;
        } elseif ($target->getHealth() <= 15) {
            echo $target->getPokemonByname() . ' heeft nu nog maar ' . $target->getHealth() . " hp over!<br>";
        }
        // Laat zien hoeveel HP er nog over is.
        else {
            echo $target->getPokemonByname() . " heeft nu nog " . $target->getHealth() . " hp over!<br>";
        }
    }

    /**
     * @return int $amountOfPokemon
     */
    //Using self because it is a non object context and a static function
    public static function getPopulation()
    {
        return self::$livingPokemons;
    }

    /**
     * @return string $name
     */
    private function getPokemonByname()
    {
        return $this->name;
    }

    /**
     * @return string $energyType
     */
    private function getEnergyType()
    {
        return $this->energyType;
    }

    /**
     * @return int $hitPoints
     */
    private function getHitpoints()
    {
        return $this->hitPoints;
    }

    /**
     * @return mixed $Attacks
     */
    private function getAttack()
    {
        return $this->attacks;
    }

    public function getAttackByname($name)
    {
        foreach ($this->attacks as $attack) {
            if ($attack->name == $name) {
                return $attack;
            }
        }
    }

    /**
     * @return mixed $weakness
     */
    private function getweakness()
    {
        return $this->weakness;
    }

    /**
     * @return mixed $resistance
     */
    private function getresistance()
    {
        return $this->resistance;
    }

    /**
     * @return int $Health
     */
    private function getHealth()
    {
        return $this->health;
    }
}
