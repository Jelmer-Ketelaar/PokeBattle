<?php

require "Pokemon.php";
require "Pikachu.php";
require "EnergyType.php";
require "Attacks.php";
require "Weakness.php";
require "Resistance.php";

$Pikachu = new Pikachu('Pikachu');
print_r('<pre>' . $Pikachu . '</pre>');