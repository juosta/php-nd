<?php 

class MarsoPalydovas {

    private static $obj1;
    private static $obj2;
    private $title;
    
    public static function getMarsoPalydovas($title)
    {
        if(rand(0,1)){
            $obj=self::$obj1;
        } else {
            $obj=self::$obj2;
        }
        return self::$obj1 ? (self::$obj2 ? $obj : self::$obj2 = new self($title)) : self::$obj1 = new self($title);
    }

    private function __construct($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }
}