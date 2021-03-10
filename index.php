<?php
//Laad alle bestanden in
require "require/requireClasses.php";

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
    <link rel="stylesheet" href="css/bootsrap.css">
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
                Name: <?php echo $charmeleon->name; ?>
            </p>
            <!-- Here it writes the name of the energytype on the page -->
            <p>
                EnergyType: <?php echo $charmeleon->energyType->getName(); ?>
            </p>
            <!-- Here it writes the total HP of charmeleon on the page -->
            <p>
                HP: <?php echo $charmeleon->health . '/' . $charmeleon->hitPoints; ?>
            </p>
            <!-- Here it writes the name of charmeleon on the page -->
            <p>
                Weakness: <?php echo $charmeleon->weakness->getWeaknessType(); ?>
            </p>

            <p>
                Resistance: <?php echo $charmeleon->resistance->getResistanceValue(); ?>
            </p>
            <br>
            <h3>Attacks:</h3>
            <?php
            //The attacks of the first pokemon
            foreach ($charmeleon->attacks as $attack) {
            ?>
                <p>
                    <?php echo $attack->getAttackname(); ?>
                </p>
            <?php
            }
            ?>
            <h3 class="infoTitle">Fight:</h3>
            <?php
            $pikachu->battleTurn($charmeleon, $pikachu->getAttackByname('Electric Ring'));

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
                Name: <?php echo $pikachu->name; ?>
            </p>

            <p>
                EnergyType: <?php echo $pikachu->energyType->getname(); ?>
            </p>

            <p>
                HP: <?php echo $pikachu->health . '/' . $pikachu->hitPoints; ?>
            </p>

            <p>
                Weakness: <?php echo $pikachu->weakness->getweaknessType(); ?>
            </p>

            <p>
                Resistance: <?php echo $pikachu->resistance->getresistanceValue(); ?>
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
            $charmeleon->battleTurn($pikachu, $charmeleon->getAttackByname('Flare'));
            ?>
        </div>
    </div>

</body>

</html>