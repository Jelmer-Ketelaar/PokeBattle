<?php

class Pokemon
{
    //Creating the properties
    static $livingPokemons;
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
        // Verhoogt de levende pokemons met 1 elke keer als de constructor word uitgevoerd.
        self::$livingPokemons++;
    }


    public function battleTurn($target, $Attacks)
    {
        $energyType = $this->getEnergyType()->getName();
        $weaknessEnergyType = $target->getWeakness()->getWeaknessType();
        $multiplierEnergyType = $target->getWeakness()->getWeaknessValue();

        $resistanceEnergyType = $target->getResistance()->getResistanceType();
        $Resistance = $target->getResistance()->getResistanceValue();

        // If the weakness matches the energy type of the attacking Pokemon, the multiplier is used.
        if ($weaknessEnergyType == $energyType) {
            $Damage = $Attacks->getAttackDamage() * $multiplierEnergyType;
            echo "<p>" . $this->getPokemonName() . " valt aan met " . $Attacks->getAttackName() . "! Dit deed  <br>" . $Damage . " Damage </br></p>";
        }

        // Als de resistance overeenkomt met de energytupe dan word de resistance afgetrokken van de attackdamage.
        elseif ($resistanceEnergyType == $energyType) {
            $Damage = $Attacks->getAttackDamage() - $Resistance;
            echo "<p>" . $this->getPokemonName() . " valt aan met " . $Attacks->getAttackName() . "! Dit doet niet heel veel damage </p>";
            echo " <p>" . $Damage . " Damage</p>";
        }

        // Shows the attack with the damage that has been done.
        else {
            $Damage = $Attacks->getAttackDamage();
            echo $this->getPokemonName() . " valt aan met " . $Attacks->getAttackName() . "<p> " . $Damage . " Damage</p>";
        }

        $this->damageDone($Damage, $target);
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
            echo $target->getPokemonName()  .  " Is verslagen!<br>";
            self::$livingPokemons--;
        }
        // Laat zien hoeveel HP er nog over is.
        else {
            echo $target->getPokemonName() . " heeft nog " . $target->getHealth() . " hp over!<br>";
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
     * @return string $Name
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
        return $this->Attacks;
    }


    public function getAttackByName($Name)
    {
        foreach ($this->Attacks as $Attack) {
            if ($Attack->Name == $Name) {
                return $Attack;
            }
        }
    }

    /**
     * @return mixed $Weakness
     */
    private function getWeakness()
    {
        return $this->Weakness;
    }

    /**
     * @return mixed $Resistance
     */
    private function getResistance()
    {
        return $this->Resistance;
    }

    /**
     * @return int $Health
     */
    private function getHealth()
    {
        return $this->health;
    }
}
