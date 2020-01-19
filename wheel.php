<?php

const PI = 3.14;

$r = $argv[1];

$OB = 2*PI*$r;

$PL = PI*($r**2);

echo "Koło o średnicy {$argv[1]} ma obwód równy " . $OB . " cm i pole równe" . $PL . " cm";  
