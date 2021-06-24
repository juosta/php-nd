<?php 

class Miskas {
    protected $name;
    
    public function __construct($name){
        $this->name = $name;
    }

    protected function papasakok(){
        echo "Aš gyvenu miške pavadintame ".$this->name.", o kur tu?<br";
    }

}