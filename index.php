<?php

require "Pokemon.php";
require "Pikachu.php";
require "Charmeleon.php";
require "EnergyType.php";
require "Attacks.php";
require "Weakness.php";
require "Resistance.php";

$Pikachu = new Pikachu('Pikachu');
print_r('<pre>' . $Pikachu . '</pre>');

$Charmeleon = new Charmeleon('Charmeleon');
print_r('<pre>' . $Charmeleon . '</pre>');  