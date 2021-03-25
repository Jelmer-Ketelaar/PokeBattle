 <?php
// Load all files
require "require/requireClasses.php";

/* Uses the class Pokemon in the namespace Pokemon */

use Pokemon\Pokemon;

//Here I bring the pokemons to life
$pikachu = new Pikachu('Pikachu');
$charmeleon = new Charmeleon('Charmeleon');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PokeBattle OOP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.png" type="favicon">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1 class="Title">Pokemon</h1>
<div class="Attack">
</div>
<!-- All info of Charmender -->
<div class="row">
    <div class="col-3" id="Charmeleon">
        <h3 class="infoTitle">Information</h3>

        <!-- Here it writes the name of charmeleon on the page -->
        <p>
            Name: <?php echo $charmeleon->getPokemonByName(); ?>
        </p>
        <!-- Here it writes the total HP of charmeleon on the page -->
        <p>
            HP: <?php echo $charmeleon->health . '/' . $charmeleon->getHealth(); ?>
        </p>
        <!-- Here it writes the name of the energytype on the page -->
        <p>
            EnergyType: --><?php echo $charmeleon->getEnergyType(); ?>
        </p>
        <!-- Here it writes the name of charmeleon on the page -->
        <p>
            Weakness: <?php echo $charmeleon->getWeakness(); ?>
        </p>

        <p>
            Resistance: <?php echo $charmeleon->getResistance(); ?>
        </p>
        <br>
        <h3>Attacks:</h3>
        <?php
        //The attacks of the first pokemon
        foreach ($charmeleon->getAttack() as $attack) {
            ?>
            <p>
                <?php echo $attack->getAttackName(); ?>
            </p>
            <?php
        }
        ?>
        <h3 class="infoTitle">Fight:</h3>
        <?php
        $pikachu->battleTurn($charmeleon, $pikachu->getAttackByName('Electric Ring'));

        ?>

    </div>

    <!-- Images -->
    <div>
        <img class="pokemonImage " src="img/pokemon-2.jpg" alt="Charmeleon">
        <img class="pokemonImage" src="img/pokemon-1.png" alt="Pikachu">
    </div>
    <!-- All info of Pikachu -->
    <div class="col-3" id="Pikachu">
        <h3 class="infoTitle">Information</h3>
        <p>
            Name: <?php echo $pikachu->getPokemonByName(); ?>
        </p>

        <p>
            EnergyType: <?php echo $pikachu->getPokemonByName(); ?>
        </p>

        <p>
            HP: <?php echo $pikachu->health . '/' . $pikachu->getHitpoints(); ?>
        </p>

        <p>
            Weakness: <?php echo $pikachu->getWeakness(); ?>
        </p>

        <p>
            Resistance: <?php echo $pikachu->getResistance(); ?>
        </p>
        <br>
        <h3>Attacks:</h3>
        <?php
        //The attacks of the second pokemon
        foreach ($pikachu->attacks as $attack) {
            ?>
            <p>
                <?php echo $attack->getAttackname(); ?>
            </p>
            <?php
        } ?>
        <h3 class="infoTitle">Fight:</h3>
        <?php
        $charmeleon->battleTurn($pikachu, $charmeleon->getAttackByName('Flare'));
        ?>
    </div>
</div>

</body>

</html>