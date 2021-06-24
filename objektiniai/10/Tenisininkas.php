<?php

class Tenisininkas {

    // Tenisininkas turi privačią savybę vardas, privačią savybę kamuoliukas  (true jei turi ir false jei ne) privačią static savybę zaidejas1, privačią static savybę zaidejas2 (žaidėjų objektams saugoti)

    private $vardas;
    private $kamuoliukas = false;
    private static $zaidejas1;
    private static $zaidejas2;

//     A. Public arTuriKamuoliuka();
// B. Public perduotiKamuoliuka() Perduoda kamuoliuką kitam Tenisininkas objektui;
// C. Public static zaidimoPradzia() Perduoda kamuoliuką atsitiktiniam žaidėjo objektui;
// Sukurti du Tenisininkas objektus. Kamuoliuko neturi nei vienas. Iškviesti statinį metodą zaidimoPradzia() ir kažkuriam žaidėjui priskirti kamuoliuką. Žaidėjo objekto metodu perduotiKamuoliuka() perduoti kamuoliuką kitam žaidėjui ir grąžinti atgal iš kito žaidėjo objekto. 

    private function __construct($name){
        $this->name = $name;
    }

    public static function getZaidejas($name)
    {
        if(rand(0,1)){
            $zaidejas=self::$zaidejas1;
        } else {
            $zaidejas=self::$zaidejas2;
        }
        return self::$zaidejas1 ? (self::$zaidejas2 ? $zaidejas : self::$zaidejas2 = new self($name)) : self::$zaidejas1 = new self($name);
    }

    public function arTuriKamuoliuka(){
        return $this->kamuoliukas;
    }

    public function perduotiKamuoliuka(){
        if(self::$zaidejas1->kamuoliukas){
            self::$zaidejas1->kamuoliukas=false;
            self::$zaidejas2->kamuoliukas=true;
        } else {
            self::$zaidejas1->kamuoliukas=true;
            self::$zaidejas2->kamuoliukas=false;
        }
    }
    public static function zaidimoPradzia(){
        if(rand(0,1)){
            self::$zaidejas1->kamuoliukas=true;
        } else{
            self::$zaidejas2->kamuoliukas=true;
        }
    }
}