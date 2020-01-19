<?php

function cal (int $a, int $x = 1)
{
    echo $x.PHP_EOL; 
    if($x === $a) return;
    cal ($a, ++$x);          
}


cal ((int)$argv[1]);