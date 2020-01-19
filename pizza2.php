<?php

$Wielkosc_pizza_1 = $argv[1];

$Cena_pizza_1 = $argv[2];

$Wielkosc_pizza_2 = $argv[3];

$Cena_pizza_2  = $argv[4];

$WP1 = $Cena_pizza_1 / $Wielkosc_pizza_1;

$WP2 = $Cena_pizza_2 / $Wielkosc_pizza_2;

$bp =[$Wielkosc_pizza_1,$Cena_pizza_1,$WP1];


for ($i=3; $i=3; $i+2){

    if ($bp[2] < $argv[$i]/$argv[$i+1]) {
        $bp= [$argv[$i],$argv[$i+1],$argv[$i],$argv[$i+1]
    }
}
    
echo "Kup pizz {$bp[0]} za {$bp[1]} zł";

