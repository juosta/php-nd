<?php
// Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš
// 5 elementų su reikšmėmis nuo 5 iki 25.
echo '<h2>1.</h2>';
echo '<pre>';
$masyvas = array_fill(0,10,array_fill(0,5,''));

foreach($masyvas as &$el)
{
    foreach($el as &$val)
    {
        $val = rand(5,25);
    }
}
unset($el);
unset($val);
print_r($masyvas);
echo '<hr>';
// Naudodamiesi 1 uždavinio masyvu:
echo '<h2>2.a</h2>';
// a) Suskaičiuokite kiek masyve yra elementų didesnių už 10;
$virs10 = 0;
foreach($masyvas as $el)
{
    foreach($el as $val)
    {
        if($val > 10)
        {
            $virs10++;
        }
    }
}
echo "Virs 10 yra $virs10 reiksmiu.<br>";
echo '<h2>2.b</h2>';
// b) Raskite didžiausio elemento reikšmę;
foreach($masyvas as $i => $val)
{
    $maxarray[$i]=max($val);
    $maxvalue = max($maxarray);
}
echo "Maksimali reiksme: $maxvalue.<br>";
echo '<h2>2.c</h2>';
// c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais
// indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
foreach($masyvas as $el)
{
    foreach ($el as $i => $val)
    {
        if (isset($vienoduisuma[$i]))
        {
            $vienoduisuma[$i] += $val;
        }
        else
        {
            $vienoduisuma[$i] = $val;
        }
    }
}
print_r($vienoduisuma);
echo '<h2>2.d</h2>';
// d) Visus masyvus “pailginkite” iki 7 elementų
foreach($masyvas as &$el)
{
        array_push($el,rand(5,25),rand(5,25));
}
unset($el);
print_r($masyvas);
// e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą
// atskirai ir sumas panaudokite kaip reikšmes sukuriant naują
// masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio
// masyvo, turinčio indeksą 0 dideliame masyve, visų elementų
// sumai
echo '<h2>2.e</h2>';
foreach($masyvas as $i => $el)
{
    $sumos[$i]=array_sum($el);
}
print_r($sumos);