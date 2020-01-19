<?php
 
function slownie($liczba) {
 
$separator = ' ';
$jednosci = ['', ' jeden', ' dwa', ' trzy', ' cztery', ' pięć', ' sześć', ' siedem', ' osiem', ' dziewięć'];
$nascie = ['', ' jedenaście', ' dwanaście', ' trzynaście', ' czternaście', ' piętnaście', ' szesnaście', ' siedemnaście', ' osiemnaście', ' dziewietnaście'];
$dziesiatki = ['', ' dziesieć', ' dwadzieścia', ' trzydzieści', ' czterdzieści', ' pięćdziesiąt', ' sześćdziesiąt', ' siedemdziesiąt', ' osiemdziesiąt', ' dziewięćdziesiąt'];
$setki  = ['', ' sto', ' dwieście', ' trzysta', ' czterysta', ' pięćset', ' sześćset', ' siedemset', ' osiemset', ' dziewięćset'];
$grupy = [ ['' ,'' ,''], [' tysiąc' ,' tysiące' ,' tysięcy'], [' milion' ,' miliony' ,' milionów'], [' miliard',' miliardy',' miliardów'], [' bilion' ,' biliony' ,' bilionów'], [' biliard',' biliardy',' biliardów'], [' trylion',' tryliony',' trylionów']
];
 
$wynik = ''; $znak = '';
if ($liczba == 0)
return 'zero';
if ($liczba < 0) {
$znak = 'minus';
$liczba = -$liczba;
}
$start = 0;
while ($liczba > 0) {
 
 
$s = floor(($liczba % 1000)/100);
$n = 0;
$d = floor(($liczba % 100)/10);
$j = floor($liczba % 10);
 
 
if ($d == 1 && $j>0) {
$n = $j;
$d = $j = 0;
}
 
$k = 2;
if ($j == 1 && $s+$d+$n == 0)
$k = 0;
if ($j == 2 || $j == 3 || $j == 4)
$k = 1;
 
if ($s+$d+$n+$j > 0)
$wynik = $setki[$s].$dziesiatki[$d].$nascie[$n].$jednosci[$j].$grupy[$start][$k].$wynik;
 
$start++;
$liczba = floor($liczba/1000);
}
return trim($znak.$wynik);
 
}
 
for ($i = 1; $i <= 1; $i++) {

echo "{$argv[$i]}".' = '.slownie($argv[$i]).PHP_EOL;
}
