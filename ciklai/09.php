<?php
// 9. Panaudokite funkciją microtime(). Paskaičiuokite kiek sekundžių
// užtruks kodą:
// $c = "10 bezdzioniu \n suvalge 20 bananu.";
// Įvykdyti 1 milijoną kartų ir palyginkite kiek užtruks įvykdyti kodą:
// $c = '10 bezdzioniu \n suvalge 20 bananu.';
// (Stringas viengubose ir dvigubose kabutėse)

$start = microtime(true);
for ($i = 0; $i <1000000; $i++){
    $c = "10 bezdzioniu \n suvalge 20 bananu.";
}
$end = microtime(true);
echo 'I Uztruko '.$end - $start . 's<br>';
$start = microtime(true);
for ($i = 0; $i <1000000; $i++){
    $c = '10 bezdzioniu \n suvalge 20 bananu.';
}
$end = microtime(true);
echo 'II Uztruko '.$end - $start . 's';

