<?php

class Stikline {
    private $turis;
    private $kiekis = 0;

    public function __construct($turis){
        $this->turis = $turis;
    }
    public function __get($prop)
    {
       return $this->$prop;
    }
    public function getKiekis()
    {
       return $this->kiekis;
    }
    public function ipilti($kiekis){
        if($kiekis > $this->turis){
            $this->kiekis = $this->turis;
            return;
        }
        if($kiekis < 0){
            return;
        }
        $this->kiekis+=$kiekis;
    }
    public function ispilti(){
        $kiekis = $this->kiekis;
        $this->kiekis=0;
        return $kiekis;
    }
}