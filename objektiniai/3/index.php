<?php
require __DIR__ . '/Kibiras2.php';
$kibiras1 = new Kibiras2;
$kibiras2 = new Kibiras2;
$kibiras3 = new Kibiras2;

echo $kibiras3->kiekAkmenuVisuoseKibiruose1();

echo "<br>";

$kibiras1->prideti1akmeni();
$kibiras2->prideti1akmeni();
echo Kibiras2::kiekAkmenuVisuoseKibiruose();
echo "<br>";
$kibiras3->pridetiDaugAkmenu(20);
echo $kibiras2->kiekAkmenuVisuoseKibiruose1();
echo "<br>";


echo "<br>";
