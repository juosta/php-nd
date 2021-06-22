<?php

class Pinigine {

    private $popieriniaiPinigai;
    private $metaliniaiPinigai;

    public function ideti($kiekis){
        if($kiekis<0){
            echo "Bandyta prideti minusinis skaicius<br>";
            return;
        }
        if($kiekis <=2 ){
            return $this->metaliniaiPinigai+=(double) $kiekis;
        } else {
            return $this->popieriniaiPinigai+=(double) $kiekis;
        }
    }

    public function skaiciuoti(){
        echo $this->metaliniaiPinigai+$this->popieriniaiPinigai;
    }
}