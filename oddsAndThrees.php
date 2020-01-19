<?php

$x=explode(";",$argv[1]);
for ($i=$x[0]; $i<=$x[1];$i++) {
    if(!($i%2)) $array[]=$i;
    if(!($i%3)) $array_try[]=$i;
}
var_dump($array);
var_dump($array_try);

