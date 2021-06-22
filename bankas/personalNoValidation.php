<?php 
foreach($users as $user){
    if($_POST['personalNo'] == $user['personalNo']){
        $error = true;
        setMessage("Vartotojas su tokiu asmens kodu jau egzistuoja.", "danger");
        break;
    }
}


if (isset($_POST['personalNo']) && (strlen($_POST['personalNo']) != 11 || strlen($personal) != 11)) {
    setMessage("Neteisingas asmens kodas, ilgis","danger");
    $error = true;
} else {

    $firstChar = substr($_POST['personalNo'], 0,1);
    $yearChar = substr($_POST['personalNo'], 1,2);
    if($yearChar <= substr(date("Y"),2,2)) {
        $year = "20$yearChar";
    } else {
        $year = "19$yearChar";
    }

    $monthChar = substr($_POST['personalNo'], 3,2);
    $dayChar = substr($_POST['personalNo'], 5,2);

    if(!preg_match('/[34569]/', $firstChar)){ // jei prasideda 9, visi like skaiciai gali buti bet kokie

        setMessage("Neteisingas asmens kodas, pirmas simbolis","danger");
        $error = true;
    } 
    if(preg_match('/[3456]/', $firstChar)) {
        if(!checkdate($monthChar, $dayChar, $year) && ($monthChar != "00" || $monthChar != "00")) { // data- menuo ir diena (gali buti nuliai)
            setMessage("Neteisingas asmens kodas, data","danger");
            $error = true;
        }
    }   
    // KONTORLINIS SKAICIUS

    $A = $firstChar;
    $B = substr($_POST['personalNo'], 1,1);
    $C = substr($_POST['personalNo'], 2,1);
    $D = substr($_POST['personalNo'], 3,1);
    $E = substr($_POST['personalNo'], 4,1);
    $F = substr($_POST['personalNo'], 5,1);
    $G = substr($_POST['personalNo'], 6,1);
    $H = substr($_POST['personalNo'], 7,1);
    $I = substr($_POST['personalNo'], 8,1);
    $J = substr($_POST['personalNo'], 9,1);
    $K = substr($_POST['personalNo'], 10,1);

    $S = ($A*1 + $B*2 + $C*3 + $D*4 + $E*5 + $F*6 + $G*7 + $H*8 + $I*9 + $J*1) % 11;
    if($S != $K){
        echo $S;
        $S = ($A*3 + $B*4 + $C*5 + $D*6 + $E*7 + $F*8 + $G*9 + $H*1 + $I*2 + $J*3) % 11;
        if($S != $K || !($S == 10 && $K ==0)){
            setMessage("Neteisingas asmens kodas, kontrolinis sk. $S","danger");
            $error = true;
        }
    }

}
