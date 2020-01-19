<?php

$i = 0;

while(isset($argv[++$i])) {
    if ('string' === gettype ($argv[$i])) {
        echo strlen($argv[$i]) . " {$argv[$i]}";
    }
}
