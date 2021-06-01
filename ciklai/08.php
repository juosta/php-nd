<?php
// 8. Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą
// (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia
// padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos
// (perkrovus puslapį spalvos turi keistis).
$aukstis = 21;
$puse = ($aukstis+1) / 2 ;
echo '<div style="text-align:center;>';
for ($i = 0 ; $i<$puse; $i++)
{
    for ($j = 0 ; $j<$i; $j++)
    {   
        echo '<span style="color: rgb(' . rand(0,255) . ',' . rand(0,255) . ',' . rand(0,255) . '); padding: 5px;">*</span>';
    }
    echo '<br>';
    
}
for ($i = $puse ; $i>0; $i--)
{
    for ($j = $i ; $j> 0; $j--)
    {
        echo '<span style="color: rgb(' . rand(0,255) . ',' . rand(0,255) . ',' . rand(0,255) . ');padding: 5px;">*</span>';
    }
    echo '<br>';
}
echo '</div>';