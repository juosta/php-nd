<?php

// 1. Naršyklėje nupieškite linija iš 400 “*”.
// a) Naudodami css stilių “suskaldykite” liniją taip, kad visos
// žvaigždutės matytųsi ekrane;
// b) Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje
// nebūtų daugiau nei 50 “*”;
echo '-----------------1---------------------<br>';
$n=50;
echo "<div style='overflow-wrap: break-word;'>";
for ($i = 1 ; $i <= 400 ; $i++)
{
    echo '*';
    if($i==$n)
    {
        echo '<br>';
        $n+=50;
    }
}
echo '</div>';
echo '<hr>';


// 2. Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos
// atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.
// Skaičiai didesni nei 275 turi būti raudonos spalvos.
echo '-----------------2---------------------<br>';
$kiek = 0;
echo "<div style='overflow-wrap: break-word;'>";
for ($i = 1 ; $i <= 300 ; $i++)
{
    $sk = rand(0,300);
    if ($sk > 150)
    {
        $kiek++;
    }
    if($sk > 275)
    {
        echo "<span style='color:red;'>$sk</span> ";
    } else {
        echo "$sk ";
    }
}
echo '</div>';
echo "<h1 style='font-size: 22px;'>Skaiciu, didesniu uz 150, yra $kiek.</h1>";
echo '<hr>';
// 3. Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio
// skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be
// liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio
// neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi
// ekrane.
echo '-----------------3---------------------<br>';
$daliklis = 78;
$sk = rand(3000,4000);
echo "<div style='overflow-wrap: break-word;'>";
echo $daliklis;
for ($i = $daliklis+1 ; $i <= $sk ; $i++)
{
    
    if ($i%$daliklis === 0)
    {
        echo ', ';
        echo $i;
    }
}
echo '</div>';

echo '<hr>';
// 4. Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite
// css stilių, kad kvadratas ekrane atrodytų kvadratinis.

// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
echo '-----------------4---------------------<br>';
$perimetras=100;
$krastine = ($perimetras / 4)+1;
//$krastine = 100;
?>
<style>
  .kvadratas {
    /* overflow-wrap: break-word;
    width: fit-content; */
    white-space: nowrap;
  }
  .kvadratas span{
      /* width:100%; */
    padding: 3px;
  }
</style>

<?php
echo "<div class='kvadratas' id='kvadratas'>";
for ($i = 0 ; $i < $krastine ; $i++)
{
    
    for ($j = 0 ; $j < $krastine ; $j++)
    {
        if($i==$j){
            echo '<span class="red">* </span>';
        }
        elseif($i+$j == $krastine-1){
            echo '<span class="red">* </span>';
        }
        else {
         echo '<span>* </span>';
        }
    }
    echo '<br>';
}

echo '</div>';


echo '<hr>';

// 5. Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.
?>
<style>
  .red{
      color: red;
  }
</style>
<!-- Variantas vien su css(linijos nupiesimas) -->
<!-- <style>
.kvadratas {
     position: relative;
  }
  .kvadratas::before{
      content: '';
      position: absolute;
      top:-20%;
      left: 50%;
      bottom: -18%;
      width: 1px;
      background-color: red;
  transform: rotate(45deg);
  }
  .kvadratas::after{
      content: '';
      position: absolute;
      top:-20%;
      left: 50%;
      bottom: -19%;
      width: 1px;
      background-color: red;
  transform: rotate(135deg);
  }
</style> -->
<?php
// 6. Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija,
// kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į
// ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas.
// Suprogramuokite keturis skirtingus scenarijus kai monetos metimą
// stabdome:
// a) Iškritus herbui;
echo '-----------------6a---------------------<br>';
$iskritoHerbas = false;
do {
    $metimas = rand(0,1);
    if($metimas == 0){
        echo 'H';
        $iskritoHerbas = true;
    } else {
        echo 'S';
    }
} while (!$iskritoHerbas);

echo '<br>';
// b) Tris kartus iškritus herbui;
echo '-----------------6b---------------------<br>';
$kiek = 0;
do {
    $metimas = rand(0,1);
    if($metimas == 0){
        echo 'H';
        $kiek++;
    } else {
        echo 'S';
    }
} while ($kiek < 3);
echo '<br>';
// c) Tris kartus iš eilės iškritus herbui;
echo '-----------------6c---------------------<br>';
$kiek = 0;
do {
    $metimas = rand(0,1);
    if($metimas == 0){
        echo 'H';
        $kiek++;
    } else {
        echo 'S';
        $kiek = 0;
    }
} while ($kiek < 3);
echo '<hr>';
// 7. Kazys ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20,
// Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų
// vardus su taškų kiekiu ir “Partiją laimėjo: laimėtojo vardas”. Taškų kiekį
// generuokite funkcija rand(). Žaidimą laimi tas, kas greičiau surenka 222
// taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba
// daugiau taškų.
echo '-----------------6c---------------------<br>';


echo '<hr>';
// 8. Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą
// (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia
// padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos
// (perkrovus puslapį spalvos turi keistis).
// 9. Panaudokite funkciją microtime(). Paskaičiuokite kiek sekundžių
// užtruks kodą:
// $c = "10 bezdzioniu \n suvalge 20 bananu.";
// Įvykdyti 1 milijoną kartų ir palyginkite kiek užtruks įvykdyti kodą:
// $c = '10 bezdzioniu \n suvalge 20 bananu.';
// (Stringas viengubose ir dvigubose kabutėse)
// 10. Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite
// pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į
// lentą).
// a) “Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20
// mm. Suskaičiuokite kiek reikia smūgių.
// b) “Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30
// mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija
// tikimybei sumodeliuoti), kad smūgis nepataikys į vinį.
// Suskaičiuokite kiek reikia smūgių.

// 11. Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200,
// atskirtų tarpais. Skaičiai turi būti unikalūs (t.y. nesikartoti).
// Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik
// pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys
// savęs). Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki
// didžiausio.