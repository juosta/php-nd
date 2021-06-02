<?php
// Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių
// reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
$masyvo_dydis = 30;
$masyvas = [];
for($i =0; $i < $masyvo_dydis;$i++)
{
    array_push($masyvas,rand(5,25));
}
var_dump($masyvas);

echo '<hr>';

// Naudodamiesi 1 uždavinio masyvu:
// a) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
$kiek = 0;
foreach ($masyvas as $value) 
//for($i =0; $i < $masyvo_dydis;$i++)
{
    if($value > 10){
        $kiek++;
    }
}
echo "<h3> Masyve yra $kiek reiksmes(-iu), didesniu uz 10.</h3>";

// b) Raskite didžiausią masyvo reikšmę ir jos indeksą;

$didziausias_indeksas = 0;
for($i =1; $i < $masyvo_dydis;$i++)
{
    if($masyvas[$i] > $masyvas[$didziausias_indeksas]){
        $didziausias_indeksas=$i;
    }
}
echo '<h3> Masyvo didziausia reiksme yra ' . $masyvas[$didziausias_indeksas] . " ir jos indeksas yra $didziausias_indeksas.</h3>";

// c) Suskaičiuokite visų porinių indeksų reikšmių sumą;
$poriniu_suma = 0;
for($i =2; $i < $masyvo_dydis;$i+=2)
{
    $poriniu_suma+=$masyvas[$i];
}
echo "<h3>Poriniu indeksu reiksmiu suma $poriniu_suma</h3>";
// d) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo
// reikšmes minus tos reikšmės indeksas;
$naujas_masyvas = [];
foreach( $masyvas as $i => $val)
//for($i =0; $i < $masyvo_dydis;$i++)
{   
    $elementas = $val-$i;
    array_push($naujas_masyvas,$elementas);
}
var_dump($naujas_masyvas);

echo '<hr>';
// e) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo
// 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
$naujas_masyvo_dydis = 39;
for($i =$masyvo_dydis; $i <= $naujas_masyvo_dydis;$i++)
{   
    array_push($naujas_masyvas,rand(5,25));
}
var_dump($naujas_masyvas);
echo '<hr>';
// f) Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti
// sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
$porinis_masyvas = [];
$neporinis_masyvas = [];
foreach( $naujas_masyvas as $i => $val)
//for($i =0; $i <= $naujas_masyvo_dydis;$i++)
{
    if($i % 2 == 0){
        array_push($porinis_masyvas,$val);
        }
    else{
        array_push($neporinis_masyvas,$val);
        }
}
echo '<h4>Porinis masyvas:</h4>';
var_dump($porinis_masyvas);
echo '<br>';
echo '<h4>Neporinis masyvas:</h4>';
var_dump($neporinis_masyvas);

echo '<hr>';
// g) Pirminio masyvo elementus su poriniais indeksais padarykite
// lygius 0 jeigu jie didesni už 15;
for($i =2; $i < $masyvo_dydis;$i+=2)
{
    if($masyvas[$i] > 15){
        $masyvas[$i]=0;
    }
}
var_dump($masyvas);
echo '<hr>';
// h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė
// didesnė už 10;
$ind = 0;
for($i =0; $i < $masyvo_dydis;$i++)
{
    if($masyvas[$i] > 10){
        $ind = $i;
        break;
    }
}
echo "<h3>Pirmas indeksas, kurio reiksme didesne uz 10: $ind</h3>";
echo '<hr>';
// i) Naudodami funkciją unset() iš masyvo ištrinkite visus elementus
// turinčius porinį indeksą;
for($i =2; $i < $masyvo_dydis;$i+=2)
{
        unset($masyvas[$i]);
}
var_dump($masyvas);
echo '<hr>';