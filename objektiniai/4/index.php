<?php
require __DIR__ . '/Kibiras3.php';
require __DIR__ . '/KibirasNePo1.php';
$kibiras1 = new Kibiras3;
$kibiras2 = new KibirasNePo1;


$kibiras1->prideti1akmeni();
$kibiras2->prideti1akmeni();
echo $kibiras1->kiekPririnktaAkmenu();
echo "<br>";
echo $kibiras2->kiekPririnktaAkmenu();
echo "<br>";



echo "<br>";
