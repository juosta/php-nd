<?php
namespace Bank;

class AccountController {

    public function index()
    {
        return App::view('index', ['users' => Json::getJson()->showAll()]);
    }

    public function addFunds($id)
    {
        return App::view('addFunds', ['id' => $id]);
    }

    public function doAddFunds($id)
    {
        $id = (int) $id;
        $amount = $_POST['amount'];
        $user = Json::getJson()->show($id);
        if($amount < 0 || !is_numeric($amount)){
            App::setMessage("Suma turi būti teigiamas skaičius.", "danger");
            App::redirect("addFunds/$id");
        } else {
            $user['balance'] += (int) $amount;
            App::setMessage("Suma sėkmingai pridėta.", "success");
            Json::getJson()->update($id, $user);
            App::redirect();
        }
    }

    public function withdraw($id)
    {
        return App::view('withdraw', ['id' => $id]);
    }

    public function doWithdraw($id)
    {
        $id = (int) $id;
        $user = Json::getJson()->show($id);
        $amount = $_POST['amount'];
        if($amount < 0 || !is_numeric($amount)){
            App::setMessage("Suma turi būti teigiamas skaičius.", "danger");
            App::redirect("withdraw/$id");
        } elseif($user['balance'] < $amount){
            App::setMessage("Bandoma nuskaičiuoti suma yra didesnė, nei sąskaitos likutis.", "danger");
            App::redirect("withdraw/$id");
        }else {
            $user['balance'] -= (int) $amount;
            App::setMessage("Suma sėkmingai nuskaičiuota.", "success");
            Json::getJson()->update($id, $user);
            App::redirect();
        }
    }

    public function delete($id)
    {
        $user = Json::getJson()->show($id);
        if($user['balance']==0){
            App::setMessage("Sąskaita sėkmingai ištrinta.", "success");
            Json::getJson()->delete($id);
            App::redirect();
        } else {
            App::setMessage("Negalima ištrinti sąskaitos, kurioje yra pinigų.", "danger");
            App::redirect();
        }
    }


    public function create()
    {
        return App::view('addAcc');
    }
    public function doCreate()
    {
        $personal = preg_replace('/[^0-9]/', '', $_POST['personalNo']);
        if(($_SERVER['REQUEST_METHOD'] == 'POST') && (!isset($_POST['name']) || empty($_POST['name']))){
            setMessage("Laukas privalomas","danger");
            $error = true;
         }
         if(isset($_POST['name']) && strlen($_POST['name']) < 3){
            setMessage("Vardas turi būti ne trumpesnis nei 3 simboliai","danger");
            $error = true;
         }
        
        if(($_SERVER['REQUEST_METHOD'] == 'POST') && (!isset($_POST['surname']) || empty($_POST['surname']))){
            setMessage("Laukas privalomas","danger");
            $error = true;
        }
        
        if(isset($_POST['surname']) && strlen($_POST['surname']) < 3) {
            setMessage("Pavardė turi būti ne trumpesnė nei 3 simboliai","danger");
            $error = true;
        }
        if(($_SERVER['REQUEST_METHOD'] == 'POST') && (!isset($_POST['personalNo']) || empty($_POST['personalNo']))){
            setMessage("Laukas privalomas","danger");
            $error = true;
        }
        isValidPersonalNo($_POST['personalNo']);
        
        if(!isset($error) && isValidPersonalNo($_POST['personalNo'])){   
            setMessage("Sąskaita sėkmingai sukurta.","success");
            save();
        } else {
            App::redirect("addAcc");
            die;
        }
    }

    public function save()
    {
        $user = ['userId'=> self::setUserId(),'name' => $_POST['name'],'surname'=> $_POST['surname'], 'accNo'=>$_POST['accNo'], 'personalNo' => $_POST['personalNo'], 'balance'=> 0];
        Json::getJson()->create($user);
        App::redirect();
    }

    public function setUserId(){
        $id = rand(1000,10000);
        $users = Json::getJson()->showAll();
        foreach($users as $user){
            if($id == $user['userId']){
                setUserId();
            }
        }
        return $id;
    }

    public function isValidPersonalNo($no){
        $users = Json::getJson()->showAll();
        foreach($users as $user){
            if($no == $user['personalNo']){
                setMessage("Vartotojas su tokiu asmens kodu jau egzistuoja.", "danger");
                return false;
            }
        }
        if (isset($no) && (strlen($no) != 11 || strlen($personal) != 11)) {
            setMessage("Neteisingas asmens kodas, ilgis","danger");
            return false;
        } else {

            $firstChar = substr($no, 0,1);
            $yearChar = substr($no, 1,2);
            if($firstChar == 5 || $firstChar ==6) {
                $year = "20$yearChar";
            } else {
                $year = "19$yearChar";
            }

            $monthChar = substr($no, 3,2);
            $dayChar = substr($no, 5,2);

            if(!preg_match('/[34569]/', $firstChar)){ // jei prasideda 9, visi like skaiciai gali buti bet kokie

                setMessage("Neteisingas asmens kodas, pirmas simbolis","danger");
                return false;
            } 
            if(preg_match('/[3456]/', $firstChar)) {
                if(!checkdate($monthChar, $dayChar, $year) && ($monthChar != "00" || $monthChar != "00")) { // data- menuo ir diena (gali buti nuliai)
                    setMessage("Neteisingas asmens kodas, data","danger");
                    return false;
                }
            }   
            // KONTORLINIS SKAICIUS

            $A = $firstChar;
            $B = substr($no, 1,1);
            $C = substr($no, 2,1);
            $D = substr($no, 3,1);
            $E = substr($no, 4,1);
            $F = substr($no, 5,1);
            $G = substr($no, 6,1);
            $H = substr($no, 7,1);
            $I = substr($no, 8,1);
            $J = substr($no, 9,1);
            $K = substr($no, 10,1);

            $S = ($A*1 + $B*2 + $C*3 + $D*4 + $E*5 + $F*6 + $G*7 + $H*8 + $I*9 + $J*1) % 11;
            if($S != $K){
                echo $S;
                $S = ($A*3 + $B*4 + $C*5 + $D*6 + $E*7 + $F*8 + $G*9 + $H*1 + $I*2 + $J*3) % 11;
                if($S != $K || !($S == 10 && $K ==0)){
                    setMessage("Neteisingas asmens kodas, kontrolinis sk. $S","danger");
                    return false;
                }
            }
        }
        return true;
    }
}