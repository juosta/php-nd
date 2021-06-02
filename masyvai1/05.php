<?php 
// 5. Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus,
// sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių (po vieną,
// nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.
$masyvo_dydis = 200;
$masyvas1 = [];
$masyvas2 = [];
$masyvas3 = [];
for ($i = 0; $i < $masyvo_dydis; $i++)
{
$char = chr(rand(65, 68));
array_push($masyvas1, $char);
echo strval($masyvas1[$i]) . ' ';
}
echo '<br>';
echo '<hr>';
for ($i = 0; $i < $masyvo_dydis; $i++)
{
$char = chr(rand(65, 68));
array_push($masyvas2, $char);
echo strval($masyvas2[$i]) . ' ';
}
echo '<hr>';
for ($i = 0; $i < $masyvo_dydis; $i++)
{
$char = chr(rand(65, 68));
array_push($masyvas3, $char);
echo strval($masyvas3[$i]) . ' ';
}
echo '<hr>';
echo '<br>';


$comb_masyvas = [];
for ($i = 0; $i < $masyvo_dydis; $i++)
{
    $comb = $masyvas1[$i] . $masyvas2[$i] . $masyvas3[$i];
    array_push($comb_masyvas, $comb);
    echo strval($comb_masyvas[$i]) . ' ';
}
echo '<br>';
$unikalus_masyvas = array_unique($comb_masyvas);
$unikalios_kombinacijos = count($unikalus_masyvas);
$unikalios_reiksmes = 0;
$uni_reiks_masyvas=[];
$pasikartojimu_masyvas = array_count_values($comb_masyvas);
for($i = 0; $i < count($pasikartojimu_masyvas); $i++){
    if (array_values($pasikartojimu_masyvas)[$i] == 1){
    $unikalios_reiksmes++;
    }
}

echo "<h4>Unikaliu reiksmiu gautame masyve: $unikalios_reiksmes</h4>";
echo "<h4>Unikaliu kombinaciju gautame masyve: $unikalios_kombinacijos</h4>";