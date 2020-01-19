<?php

$Wielkosc_pizza_1 = $argv[1];

$Cena_pizza_1 = $argv[2];

$Wielkosc_pizza_2 = $argv[3];

$Cena_pizza_2  = $argv[4];

$WP1 = $Cena_pizza_1 / $Wielkosc_pizza_1;

$WP2 = $Cena_pizza_2 / $Wielkosc_pizza_2;

if ($WP1 < $WP2) {
    echo "kup pizze {$argv[1]} cm za {$argv[2]} zł";
} elseif ($WP1 > $WP2) {
    echo "kup pizze {$argv[3]} cm za {$argv[4]} zł";
} else {
    echo 'kup obojętnie którą pizzę każda się opłca';
}
