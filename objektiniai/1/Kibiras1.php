<?php

class Kibiras1 {
    protected $akmenukiekis = 0;
//----------------------------------
    public function prideti1Akmeni(){
        return $this->akmenukiekis++;
    }

    public function pridetiDaugAkmenu($kiekis){
        if($kiekis < 0){
            print("Bandyta prideti minusini skaiciu.<br>");
            return;
        }
        return $this->akmenukiekis+=(int)$kiekis;

    }

    public function kiekPririnktaAkmenu(){
        return $this->akmenukiekis;
    }
}