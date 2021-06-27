<?php

class Pinigine {

    private $popieriniaiPinigai;
    private $metaliniaiPinigai;
    private $banknotai;
    private $monetos;

    public function ideti($kiekis){
        if($kiekis<0){
            return;
        }
        if($kiekis <=2 ){
            $this->monetos++;
            return $this->metaliniaiPinigai+=(double) $kiekis;
        } else {
            $this->banknotai++;
            return $this->popieriniaiPinigai+=(double) $kiekis;
        }
    }

    public function skaiciuoti(){
        echo $this->metaliniaiPinigai+$this->popieriniaiPinigai;
    }

    public function banknotai(){

        return $this->banknotai;
    }
    public function monetos(){

        return $this->monetos;
    }


    // public function monetos(){
        // $suma = ($this->metaliniaiPinigai+$this->popieriniaiPinigai%5)*100;
        // $monetos = 0;
        // _d($suma,"pradine suma");
        // $monetuArr = [200,100,50,20,10,5,2,1];
        // foreach($monetuArr as $moneta){
        //     _d($moneta,"koks moneta");
        //     if($suma/$moneta>=1){
        //         $kiek = 0;
        //         $kiek += (int) floor($suma / $moneta);
        //         _d($kiek,"kiek yra $moneta");
        //         $suma -= (int) $kiek *$moneta;
        //         _d($suma,"kokia suma lieka");
        //         $monetos += $kiek;
        //     }
        // }
        // _d($suma,"suma, po visu skaiciavimu");

        // return $monetos;
    // }

    

    // public function banknotai(){
        // $suma = $this->metaliniaiPinigai+$this->popieriniaiPinigai;
        // $banknotai = 0;
        // $banknotuArr = [500,200,100,50,20,10,5];
        // foreach($banknotuArr as $banknotas){
        //     _d($banknotas,"koks banknotas");
        //     if($suma/$banknotas>=1){
        //         $kiek = 0;
        //         $kiek += (int) floor($suma / $banknotas);
        //         _d($kiek,"kiek yra $banknotas");
        //         $suma -= (int) $kiek *$banknotas;
        //         _d($suma,"kokia suma lieka");
        //         $banknotai += $kiek;
        //     }
        // }
        // _d($suma,"suma, po visu skaiciavimu");

        // return $banknotai;
    // }

    
    
}