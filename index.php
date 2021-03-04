<?php
//Laad alle bestanden in
require "require/requireClasses.php";

//Objecten van een class
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
        <?php
        /* Uses the class Pokemon in the Pokemon namespace */
        /* Shows how much pokemons are still alive with the getPopulation function in the Pokemon class */
        //    echo '<br>Op dit moment zijn er ' . Pokemon::getPopulation() . ' Pokemons levend.';
        ?>
    </div>
    <!-- All info of Charmender -->
    <div class="row">
        <div class="col-3" id="Charmeleon">
            <h3 class="infoTitle">Information</h3>

            <!-- Here it writes the name of charmeleon on the page -->
            <p>
                Name: <?php echo $Charmeleon->Name; ?>
            </p>
            <!-- Here it writes the name of the energytype on the page -->
            <p>
                EnergyType: <?php echo $Charmeleon->energyType->getName(); ?>
            </p>
            <!-- Here it writes the total HP of charmeleon on the page -->
            <p>
                HP: <?php echo $Charmeleon->health . '/' . $Charmeleon->hitPoints; ?>
            </p>
            <!-- Here it writes the name of charmeleon on the page -->
            <p>
                Weakness: <?php echo $Charmeleon->Weakness->getWeaknessType(); ?>
            </p>

            <p>
                Resistance: <?php echo $Charmeleon->Resistance->getRecistanceValue(); ?>
            </p>
            <br>
            <h3>Attacks:</h3>
            <?php
            //The attacks of the first pokemon
            foreach ($Charmeleon->Attacks as $attack) {
            ?>
                <p>
                    <?php echo $attack->getAttackName(); ?>
                </p>
            <?php
            }
            ?>
            <h3 style="margin-top: 5vh">Fight:</h3>
            <?php
            $Pikachu->battleTurn($Charmeleon, $Pikachu->Attacks['Flare']);
            ?>

        </div>

        <!-- Images -->
        <div>
            <img class="Charmeleon " src="img/pokemon-2.jpg" alt="Charmeleon">
            <img class="Pikachu" src="img/pokemon-1.png" alt="Pikachu">
        </div>
        <!-- All info of Pikachu -->
        <div class="col-3" id="Pikachu">
            <div class="information">
                <h3 style=>Information</h3>
                <p>
                    Name: <?php echo $Pikachu->Name; ?>
                </p>

                <p>
                    EnergyType: <?php echo $Pikachu->energyType->getName(); ?>
                </p>

                <p>
                    HP: <?php echo $Pikachu->health . '/' . $Pikachu->hitPoints; ?>
                </p>

                <p>
                    Weakness: <?php echo $Pikachu->Weakness->getWeaknessType(); ?>
                </p>

                <p>
                    Resistance: <?php echo $Pikachu->Resistance->getRecistanceValue(); ?>
                </p>
                <br>
                <h3>Attacks:</h3>
                <?php
                //The attacks of the second pokemon
                foreach ($Pikachu->Attacks as $attack) {
                ?>
                    <p>
                        <?php echo $attack->getAttackName(); ?>
                    </p>
                <?php
                } ?>
                <h3 style="margin-top: 5vh">Fight:</h3>
                <?php
                $Charmeleon->battleTurn($Pikachu, $Charmeleon->Attacks['Flare']);
                ?>
            </div>
        </div>
    </div>

</body>

</html>