<?php

$vowels = str_split('aeiouAEIOU�yY');
$onlyconsonants = str_replace($vowels, "", $argv[1]);
echo $onlyconsonants;
