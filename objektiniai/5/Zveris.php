<?php 

class Zveris extends Miskas{
    protected $name;
    
    public function __construct($name){
        $this->name = $name;
    }

    protected function papasakok(){
        echo "Aš esu žvėris vardu " .$this->name .'.<br>';
        parent::papasakok();
    }
    public function pasakok(){
        $this->papasakok();
    }
}