<?php 
// 1. <!-- Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;
// function heading($tekstas){
//     echo "<h1>$tekstas</h1>";
// }

heading("kazkas parasyta h1 tage");

// 2. Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą,
//  o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją; -->

function heading($tekstas,int $tagas = 1){
    echo "<h$tagas>$tekstas</h$tagas>";
}

heading("kazkoks tekstas", 3);

// 3. Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą.
//  Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą
//   ir užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();

$h1 = function (string|array $text) : string
{
    if (is_array($text)) {
        $text = $text[0];
    }
    return "<h1 style=\"display:inline;\">$text</h1>";
};


$genText = md5(time());
$out = preg_replace_callback('/\d+/', $h1, $genText);

echo $out;

// 4. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save)
//  Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;
echo '<br>';
echo '4.';
echo '<br>';

function numeris(int $number) {
    $count = 0;
    for ($i = 2; $i < $number ; $i++) { 
        if ($number % $i === 0) {
            $count++;
        } 
        if ($count === 0){
            return 'dalyba negalima';
        }
    }       
     return "Skaicius: $number dalijasi is $count sveiku skaiciu.";
}

$skaicius = rand(2, 150);

echo numeris($skaicius);