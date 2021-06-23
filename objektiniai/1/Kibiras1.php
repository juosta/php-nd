<?php

class Kibiras1 {
    protected $akmenukiekis = 0;
//----------------------------------
    public function prideti1Akmeni(){
        return $this->akmenukiekis++;
    }

    public function pridetiDaugAkmenu($kiekis){
        if($kiekis < 0 || !is_integer($kiekis)){
            return;
        }
        return $this->akmenukiekis+=$kiekis;

    }

    public function kiekPririnktaAkmenu(){
        return $this->akmenukiekis;
    }
}