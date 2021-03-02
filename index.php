<?php
//Laad alle bestanden in
require "require/requireClasses.php";

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

<!-- All info of Charmender -->
<div class="row">
    <div class="col-sm-2 text-center">
        <h3 class="text-center information-charmeleon">Information</h3>

        <p>
            Name: <?php echo $Charmeleon->Name; ?>
        </p>

        <p>
            EnergyType: <?php echo $Charmeleon->energyType->getName(); ?>
        </p>

        <p>
            HP: <?php echo $Charmeleon->Health . '/' . $Charmeleon->Hitpoints; ?>
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
            <p>
                <?php echo $attack->getName(); ?>
            </p>
            <?php
        }
        ?>

        <!-- Pikachu attacks Charmeleon with Electric Ring -->
        <div class="Attack">
            <p>
                Pikachu valt Charmeleon aan met Electric Ring. Dit doet 40 damage
                <?php
                /* Maakt nieuwe objecten aan */
                $Pikachu->attackPokemon($Charmeleon, $Pikachu->attacks['Electric Ring']); ?> </p>
            <p>
                HP Left: <?php echo $Charmeleon->Health - 40 . '/' . $Charmeleon->Hitpoints; ?>
            </p>
        </div>
    </div>


    <!-- Charmeleon attacks Pikachu with Flare -->


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
            EnergyType: <?php echo $Pikachu->energyType->getName(); ?>
        </p>

        <p>
            HP: <?php echo $Pikachu->Health . '/' . $Pikachu->Hitpoints; ?>
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
        //The attacks of the second pokemon
        foreach ($Pikachu->Attacks as $attack) {
            ?>
            <p>
                <?php echo $attack->getName(); ?>
            </p>
            <?php
        }
        ?>
        <div class="attackCharmeleon">
            <p>
                Charmeleon valt Pikachu aan met Fire. Dit doet 20 damage
                <?php
                /* Maakt nieuwe objecten aan */
                $Pikachu->attackPokemon($Charmeleon, $Pikachu->attacks['Fire']); ?>
            </p>
            <p>
                HP Left: <?php echo $Pikachu->Health - 30 . '/' . $Pikachu->Hitpoints; ?>
            </p>
        </div>
    </div>
</div>

</body>

</html>
