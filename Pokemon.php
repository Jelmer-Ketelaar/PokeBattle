<?php
//Creating the namespace and calling it in my Pickachu and Charmeleon classes
namespace Pokemon;
// If a class is called if it has not already been called, the function does so automatically.
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class Pokemon
{
    //Creating the properties
    static $livingPokemons;
    private $name;
    private $energyType;
    private $hitPoints;
    public $attacks;
    private $weakness;
    private $resistance;

    /**
     * Constructor used to create a Pokemon object
     * @param string $name
     * @param mixed $energyType
     * @param int $hitPoints
     * @param mixed $attacks
     * @param mixed $weakness
     * @param mixed $resistance
     */

    // Declarte construct method which accepts six parameters
    protected function __construct($name, $energyType, $hitPoints, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitPoints = $hitPoints;
        $this->health = $hitPoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        //Increases the  livingPokemons by 1, each time the constructor is executed.
        self::$livingPokemons++;
    }

    public function battleTurn($target, $attacks)
    {
        $energyType = $target->getEnergyType()->getName();
        $weaknessEnergyType = $target->getWeakness()->getWeaknessType();
        $multiplierEnergyType = $target->getWeakness()->getWeaknessValue();

        $resistanceEnergyType = $target->getResistance()->getResistanceType();
        $resistance = $target->getResistance()->getResistanceValue();

        // If the weakness matches the energy type of the attacking Pokemon, the multiplier is used.
        if ($weaknessEnergyType == $energyType) {
            $damage = $attacks->getAttackDamage() * $multiplierEnergyType;
            echo "<p>" . $this->getPokemonByName() . " valt aan met " . $attacks->getAttackName() . "! Dit doet niet heel veel damage </p>";
            echo " <p>" . $damage . " damage </p>";
        } // If the resistance matches the energy type, the resistance is subtracted from the attack damage.
        elseif ($resistanceEnergyType == $energyType) {
            $damage = $attacks->getAttackDamage() - $resistance;
            echo "<p>" . $this->getPokemonByName() . " valt aan met " . $attacks->getAttackName() . "! Dit doet niet heel veel damage </p>";
            echo " <p>" . $damage . " damage </p>";
        } // Shows the attack with the damage that has been done.
        else {
            $damage = $attacks->getAttackdamage();
            echo $this->getPokemonByName() . " valt aan met " . $attacks->getAttackName() . "<p> " . $damage . " damage</p>";
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
        // If the HP is 0 then a Pokemon is taken from it
        $target->health -= $damage;
        if ($target->getHealth() <= 0) {
            echo $target->getPokemonByName() . " Is verslagen!<br>";
            self::$livingPokemons--;
        } elseif ($target->getHealth() <= 15) {
            echo $target->getPokemonByName() . ' heeft nu nog maar ' . $target->getHealth() . " hp over!<br>";
        } // Shows how much HP there is left
        else {
            echo $target->getPokemonByName() . " heeft nu nog " . $target->getHealth() . " hp over!<br>";
        }
    }

    //Creating all the functions
    /**
     * @return int $livingPokemons
     */
    //Using self because it is a non object context and a static function
    public static function getPopulation()
    {
        return self::$livingPokemons;
    }

    /**
     * @return string $name
     */
    public function getPokemonByName()
    {
        return $this->name;
    }

    /**
     * @return string $energyType
     */
    public function getEnergyType()
    {
        return $this->energyType;
    }

    /**
     * @return int $hitPoints
     */
    public function getHitpoints()
    {
        return $this->hitPoints;
    }

    /**
     * @return mixed $attacks
     */
    public function getAttack()
    {
        return $this->attacks;
    }

    public function getAttackByName($name)
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
    public function getWeakness()
    {
        return $this->weakness;
    }

    /**
     * @return mixed $resistance
     */
    public function getResistance()
    {
        return $this->resistance;
    }

    /**
     * @return int $health
     */
    public function getHealth()
    {
        return $this->health;
    }
}
