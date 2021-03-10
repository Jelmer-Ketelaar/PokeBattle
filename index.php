<?php
//Laad alle bestanden in
require "require/requireClasses.php";

//Here I bring the pokemons to life
$Pikachu = new Pikachu('Pikachu');
$Charmeleon = new Charmeleon('Charmeleon');

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
                name: <?php echo $Charmeleon->name; ?>
            </p>
            <!-- Here it writes the name of the energytype on the page -->
            <p>
                EnergyType: <?php echo $Charmeleon->energyType->getname(); ?>
            </p>
            <!-- Here it writes the total HP of charmeleon on the page -->
            <p>
                HP: <?php echo $Charmeleon->health . '/' . $Charmeleon->hitPoints; ?>
            </p>
            <!-- Here it writes the name of charmeleon on the page -->
            <p>
                weakness: <?php echo $Charmeleon->weakness->getweaknessType(); ?>
            </p>

            <p>
                resistance: <?php echo $Charmeleon->resistance->getresistanceValue(); ?>
            </p>
            <br>
            <h3>Attacks:</h3>
            <?php
            //The attacks of the first pokemon
            foreach ($Charmeleon->attacks as $attack) {
            ?>
                <p>
                    <?php echo $attack->getAttackname(); ?>
                </p>
            <?php
            }
            ?>
            <h3 style="margin-top: 5vh">Fight:</h3>
            <?php
            $Pikachu->battleTurn($Charmeleon, $Pikachu->getAttackByname('Electric Ring'));

            ?>

        </div>

        <!-- Images -->
        <div>
            <img class="Charmeleon " src="img/pokemon-2.jpg" alt="Charmeleon">
            <img class="Pikachu" src="img/pokemon-1.png" alt="Pikachu">
        </div>
        <!-- All info of Pikachu -->
        <div class="col-3" id="Pikachu">
            <h3 class="infoTitle">Information</h3>
            <p>
                name: <?php echo $Pikachu->name; ?>
            </p>

            <p>
                EnergyType: <?php echo $Pikachu->energyType->getname(); ?>
            </p>

            <p>
                HP: <?php echo $Pikachu->health . '/' . $Pikachu->hitPoints; ?>
            </p>

            <p>
                weakness: <?php echo $Pikachu->weakness->getweaknessType(); ?>
            </p>

            <p>
                resistance: <?php echo $Pikachu->resistance->getresistanceValue(); ?>
            </p>
            <br>
            <h3>Attacks:</h3>
            <?php
            //The attacks of the second pokemon
            foreach ($Pikachu->attacks as $attack) {
            ?>
                <p>
                    <?php echo $attack->getAttackname(); ?>
                </p>
            <?php
            } ?>
            <h3 style="margin-top: 5vh">Fight:</h3>
            <?php
            $Charmeleon->battleTurn($Pikachu, $Charmeleon->getAttackByname('Flare'));
            ?>
        </div>
    </div>

</body>

</html>