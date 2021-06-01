<?php
// 10. Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite
// pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į
// lentą).
echo '<h2>A variantas</h2>';
// a) “Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20
// mm. Suskaičiuokite kiek reikia smūgių.
$ilgis = 85;
for ($i = 1 ; $i <= 5; $i++)
{
    $kiek = 0;
    $gylis = 0;
    do {
        $gylis += rand(5,20);
        $kiek++;
    } while ($gylis < $ilgis);
    echo "$i vinis. Reikejo smugiu: $kiek <br>";
}

echo '<h2>B variantas</h2>';
// b) “Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30
// mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija
// tikimybei sumodeliuoti), kad smūgis nepataikys į vinį.
// Suskaičiuokite kiek reikia smūgių.
for ($i = 1 ; $i <= 5; $i++)
{
    $kiek = 0;
    $gylis = 0;
    do {
        if(rand(0,1)==0){
        $gylis += rand(20,30);
        }   
        $kiek++;
    } while ($gylis < $ilgis);
    echo "$i vinis. Reikejo smugiu: $kiek <br>";
}
