<?php
echo '---------------------1-----------------------------<br>';
// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip
// stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.
$vardas = 'Cillian';
$pavarde = 'Murphy';

echo $vardas . ' ' . $pavarde . '<br>';

if (strlen($vardas) > strlen($pavarde))
{
    echo "Trumpesne yra pavarde: $pavarde";
} elseif(strlen($vardas) < strlen($pavarde)){
    echo "Trumpesnis yra vardas: $vardas";
} else {
    echo 'vardas ir pavarde yra vienodo ilgio.';
}
echo '<br>';

echo '---------------------2-----------------------------<br>';
// 2. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip
// stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
$vardas = 'Cillian';
$pavarde = 'Murphy';

echo strtoupper($vardas) . ' ' . strtolower($pavarde);

echo '<br>';
echo '---------------------3-----------------------------<br>';
// 3. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip
// stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir
// pavardės kintamųjų raidžių. Jį atspausdinti.
$vardas = 'Cillian';
$pavarde = 'Murphy';

$trecias = $vardas[0] . $pavarde[0];

echo $trecias;

echo '<br>';
echo '---------------------4-----------------------------<br>';
// 4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip
// stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir
// pavardės kintamųjų raidžių. Jį atspausdinti.
$vardas = 'Cillian';
$pavarde = 'Murphy';
$trecias = substr($vardas,strlen($vardas)-3,3) . substr($pavarde,strlen($pavarde)-3,3);
echo $trecias;

echo '<br>';
echo '---------------------5-----------------------------<br>';
// 5. Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir
// mažąsias) pakeisti žvaigždutėm “*”. Rezultatą atspausdinti.
$american = 'An American in Paris';

echo str_ireplace('a','*',$american);

echo '<br>';
echo '---------------------6-----------------------------<br>';
// 6. Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir
// mažąsias) raides. Rezultatą atspausdinti.
$american = 'An American in Paris';

echo 'A raidziu sakinyje: ' . substr_count(strtolower($american), 'a');
echo '<br>';
echo '---------------------7-----------------------------<br>';
// 7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą
// atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space
// Odyssey” ir “It's a Wonderful Life”.
$american = 'An American in Paris';
$tiffany = "Breakfast at Tiffany's";
$odyssey = '2001: A Space Odyssey';
$life = "It's a Wonderful Life";
function istrinti_balses($string){
    $string = preg_replace('/[aeiouy]/', '', strtolower($string));
    return $string;
}
echo $american . '<br>';
echo istrinti_balses($american) . '<br>';
echo $tiffany . '<br>';
echo istrinti_balses($tiffany) . '<br>';
echo $odyssey . '<br>';
echo istrinti_balses($odyssey) . '<br>';
echo $life . '<br>';
echo istrinti_balses($life);

echo '<br>';
echo '---------------------8-----------------------------<br>';
// 8. Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ',
// rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo
// numerį.
$star_wars = 'Star Wars: Episode '. str_repeat(' ',rand(0,5)). rand(1,9) . '- A New Hope';
echo $star_wars . '<br> ';
echo 'epizodo nr. ' . preg_replace('/[^0-9]/', '', $star_wars);

echo '<br>';
echo '---------------------9-----------------------------<br>';
// 9. Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice
// in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu
// “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
$pirmas = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$antras = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

function kiekzodziu($str){
    $kiek = 0;
    $arr = explode(" ",$str);
    for ($i=0; $i < count($arr); $i++) { 
        $zodis = $arr[$i];
        if (mb_strlen($zodis) <= 5){
            $kiek++;
        }
    }
    return $kiek;
}
echo 'trumpesnių arba lygių nei 5 raidės: ' . kiekzodziu($pirmas) . '<br>';
echo 'trumpesnių arba lygių nei 5 raidės: ' . kiekzodziu($antras);

echo '<br>';
echo '---------------------10----------------------------<br>';
// 10. Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis
// 3 simboliai.

function generuotiAtsitiktiniStr($length = 3) {
    return substr(str_shuffle(str_repeat($x='abcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length);
}

echo  generuotiAtsitiktiniStr();


echo '<br>';
echo '---------------PAPILDOMAS 11 ----------------<br>';

// Papildomas.
// 11. Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų
// žodžių, o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai
// neturi kartotis. (reikės masyvo)
$pirmas = preg_replace('/[.,]/', '', $pirmas);
$antras = preg_replace('/[,.]/', '', $antras);
$string =array_merge(explode(" ",$pirmas), explode(" ",$antras));
$kiek = count($string);
$random = [];
while(count($random)< 10 ){
    array_push($random, $string[rand(0,$kiek-1)]);
    $random = array_unique($random);
}
print_r($random);

