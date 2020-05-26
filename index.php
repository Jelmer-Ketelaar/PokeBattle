<?php
//Laad alle bestanden in
require "Pokemon.php";
require "Pikachu.php";
require "Charmeleon.php";
require "EnergyType.php";
require "Attacks.php";
require "Weakness.php";
require "Resistance.php";
require "Statistics.php";

$Pikachu = new Pikachu('Pikachu');
$Charmeleon = new Charmeleon('Charmeleon');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PokeBattle OOP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="icon" href="img/favicon.png" type="favicon">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
        <h1 class="Title">Pokemon</h1>
        <div class="cont">
        <div>
            <!-- Pikachu attacks Charmeleon with Electric Ring -->
            <p class="lead text-danger"> <?php $Pikachu->attackPokemon($Charmeleon, $Pikachu->attacks['Electric Ring']); ?></p>


            <!-- Charmeleon attacks Pikachu with Flare -->
            <p class="lead text-warning pl-5"> <?php $Charmeleon->attackPokemon($Pikachu, $Charmeleon->Attacks['Flare']); ?></p>
        </div>


        <!-- All info of Charmender -->

        <div class="row">
            <div class="col-sm-2 text-center">
                <h3 class="text-center information-charmeleon">Information</h3>

                <p>
                    Name: <?php echo $Charmeleon->Name; ?>
                </p>

                <p>
                    EnergyType: <?php echo $Charmeleon->EnergyType->getName(); ?>
                </p>

                <p>
                    HP: <?php echo $Charmeleon->Health -40 . '/' . $Charmeleon->Hitpoints; ?>
                </p>

                <p>
                    Weakness: <?php echo $Charmeleon->Weakness->getWeaknessType(); ?>
                </p>

                <p>
                    Resistance: <?php echo $Charmeleon->Resistance->getResistanceType(); ?>
                </p>
                <br>
                <h3 class="text-center">Attacks:</h3>
                <?php
                //The attacks of the first pokemon
                foreach ($Charmeleon->Attacks as $attack) {
                    ?>
                    <p><?php echo $attack->getName(); ?></p>
                    <?php
                }
                ?>
            </div>
            <div>
                <img class="Charmeleon " src="img/pokemon-2.jpg" alt="Charmeleon">
                <img class="Pikachu" src="img/pokemon-1.png" alt="Pikachu">
            </div>
            <!-- All info of Pikachu -->
            <div class="col-sm-2 text-center">
                <h3 class="text-center information-pikachu">Information</h3>

                <p>
                    Name: <?php echo $Pikachu->Name; ?>
                </p>

                <p>
                    EnergyType: <?php echo $Pikachu->EnergyType->getName(); ?>
                </p>

                <p>
                    HP: <?php echo $Pikachu->Health -30  . '/' . $Pikachu->Hitpoints; ?>
                </p>

                <p>
                    Weakness: <?php echo $Pikachu->Weakness->getWeaknessType(); ?>
                </p>

                <p>
                    Resistance: <?php echo $Pikachu->Resistance->getResistanceType(); ?>
                </p>
                <br>
                <h3 class="text-center">Attacks:</h3>
                <?php
                //The attacks of the first pokemon
                foreach ($Pikachu->Attacks as $attack) {
                    ?>
                    <p>
                        <?php echo $attack->getName(); ?>
                    </p>
                    <?php
                }


                ?>


            </div>
        </div>
    </div>
</div>

</body>

</html>
