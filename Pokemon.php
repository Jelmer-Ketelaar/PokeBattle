<?php

class Pokemon
{
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
     * @param string $energyType
     * @param int $hitPoints
     * @param mixed $Attacks
     * @param mixed $Weakness
     * @param mixed $Resistance
     */

    protected function __construct($Name, $energyType, $hitPoints, $Attacks, $Weakness, $Resistance)
    {
        //Maakt van alle variabelen
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

        // Print de naam en de HP en hoeveel hitpoints de Pokemon nog heeft.
        echo "<strong><p>" . $target->getPokemonName() . " HP: " . $target->getHealth() . "/" . $target->getHitpoints() . " </p>";
        // Als de weakness overeenkomt met de energytype van de aanvallende Pokemon dan word de multiplier gebruikt.
        if ($weaknessEnergyType == $energyType) {
            $damage = $Attacks->getAttackDamage() * $multiplierEnergyType;
            echo "<p>" . $this->getPokemonName() . " valt aan met " . $Attacks->getAttackName() . "! Dit doet niet heel veel damage  <br>(" . $damage . " Damage) </br></p>";
        } // Als de resistance overeenkomt met de energytupe dan word de resistance afgetrokken van de attackdamage.
        elseif ($resistanceEnergyType == $energyType) {
            $damage = $Attacks->getAttackDamage() - $resistance;
            echo "<p>" . $this->getPokemonName() . " valt aan met " . $Attacks->getAttackName() . "! Dit doet niet heel veel damage </p>(<p>" . $damage . " Damage)</p>";
        } // Laat de attack zien met de damage die wordt aangedaan.
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
        $target->health -= $damage;
        if ($target->getHealth() <= 0) {
            echo $target->getPokemonName() . " Got him!<br>";
            self::$livingPokemons--;
        } // Laat zien hoeveel HP er nog over is.
        else {
            echo $target->getPokemonName() . " heeft nu nog " . $target->getHealth() . " hp over!<br>";
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

