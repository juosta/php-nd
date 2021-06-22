<?php
require __DIR__ . '/Kibiras1.php';
$kibiras = new Kibiras1;

echo $kibiras->kiekPririnktaAkmenu();

echo "<br>";

$kibiras->prideti1akmeni();

echo $kibiras->kiekPririnktaAkmenu();

echo "<br>";

$kibiras->pridetiDaugAkmenu(-20);

echo $kibiras->kiekPririnktaAkmenu();