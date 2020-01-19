<?php
$ships = [
        'A' => [0, 0, 0, 0, 0], 
        'B' => [0, 1, 0, 1, 0],
        'C' => [0, 1, 0, 0, 0],
        'D' => [0, 1, 0, 0, 1],
        'E' => [0, 0, 0, 0, 1],
];

echo ($ships[$argv[1]][$argv[2]-1]?'Trafienie':'Pudło').' dla pola '.$argv[1].$argv[2];

