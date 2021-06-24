<?php

class Grybas {
    private bool $valgomas;
    private bool $sukirmijes;
    private $svoris;
    
    public function __construct(){
        $this->valgomas = rand(0,1);
        $this->sukirmijes = rand(0,1);
        $this->svoris = rand(0,45);
    }

    public function __get($prop){
        return $this->$prop;
    }
}