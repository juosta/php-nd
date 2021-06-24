<?php 
require __DIR__. '/Miskas.php';
require __DIR__. '/Zveris.php';
$miskas = new Miskas("Labanoro");
$zveris = new Zveris("Vilkas");

$zveris->pasakok();
// $reflectionMethod = new ReflectionMethod('Zveris', 'papasakok');
// $reflectionMethod->setAccessible(true);

// $reflectionMethod->invoke($zveris);