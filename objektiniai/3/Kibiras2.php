<?php

class Kibiras2 {
    protected $akmenukiekis = 0;
    private static $akmenuKiekisVisuoseKibiruose=0;
//----------------------------------
    public function prideti1Akmeni(){
        self::$akmenuKiekisVisuoseKibiruose++;
        return $this->akmenukiekis++;
    }

    public function pridetiDaugAkmenu($kiekis){
        if($kiekis < 0 || !is_integer($kiekis)){
            return;
        }
        self::$akmenuKiekisVisuoseKibiruose+=$kiekis;
        $this->akmenukiekis+=$kiekis;

    }

    public function kiekPririnktaAkmenu(){
        return $this->akmenukiekis;
    }

    public function kiekAkmenuVisuoseKibiruose1(){
        return self::$akmenuKiekisVisuoseKibiruose;
    }
    public static function kiekAkmenuVisuoseKibiruose(){
        return self::$akmenuKiekisVisuoseKibiruose;
    }
}