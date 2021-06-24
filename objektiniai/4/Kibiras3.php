<?php

class Kibiras3 {
    protected $akmenukiekis = 0;
//----------------------------------
    public function prideti1Akmeni(){
        $this->akmenukiekis++;
    }

    public function pridetiDaugAkmenu($kiekis){
        if($kiekis < 0 || !is_integer($kiekis)){
            return;
        }
        $this->akmenukiekis+=$kiekis;

    }

    public function kiekPririnktaAkmenu(){
        return $this->akmenukiekis;
    }
}