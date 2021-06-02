<?php

// Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis
// 200. Suskaičiuokite kiek yra kiekvienos raidės.
$masyvas = [];
$a = 0; $b = 0; $c = 0; $d = 0;
$masyvo_dydis = 200;
for ($i = 0; $i < $masyvo_dydis; $i++)
{
    $char = chr(rand(65, 68));
    if ($char === 'A'){
        $a++;
    }
    if ($char === 'B'){
        $b++;
    }
    if ($char === 'C'){
        $c++;
    }
    if ($char === 'D'){
        $d++;
    }
    array_push($masyvas, $char);
    echo strval($masyvas[$i]) . ' ';
}
echo '<br>';
echo "A raidziu: $a, B raidziu: $b, C raidziu: $c, D raidziu: $d";
echo '<br>';
// 4. Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
sort($masyvas);
foreach($masyvas as $val)
//for ($i = 0; $i < $masyvo_dydis; $i++)
{
    echo strval($val) . ' ';
}
echo '<br>';