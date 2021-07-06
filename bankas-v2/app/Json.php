<?php
namespace Bank;
use App\DB\DataBase;

class Json implements DataBase {

    private $data;
    private static $obj;

    public static function getJson()
    {
        return self::$obj ?? self::$obj = new self;
    }

    private function __construct(){
        if (!file_exists(DIR.'/data.json')) {
            file_put_contents(DIR.'/data.json', json_encode([]));
        }
        $this->data = json_decode(file_get_contents(DIR.'/data.json'), 1);
    }

    public function __destruct()
    {
        file_put_contents(DIR.'/data.json', json_encode($this->data));
    }

    public function create(array $userData) : void
    {
        $this->data[] = $userData;
    }
 
    public function update(int $userId, array $userData) : void
    {
        foreach($this->data as $index =>$user){
            if($user['userId'] == $userId){
                $this->data[$index] = $userData;
                return;
            }
        }
    }
 
    public function delete(int $userId) : void
    {
        foreach($this->data as $index => $user){
            if($user['userId'] == $userId){
                unset($this->data[$index]);
                return;
            }
        }
    }
 
    public function show(int $userId) : array
    {
        foreach($this->data as $index => $user){
            if($user['userId'] == $userId){
                return $this->data[$index];
            }
        }
    }
    
    public function showAll() : array
    {
        return $this->data;
    }
}