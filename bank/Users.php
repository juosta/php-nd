<?php
    $string = "";
    $data = fopen("data.json", "r+") or die("Unable to open file!");
    while(!feof($data)) {
        $string = $string . fgets($data);
      }
    $json_array = json_decode($string, true);
    _d($json_array);
    fclose($data);

    foreach($json_array['users'] as $value)
    {
        _d($value['name']);
    }
    class User {
        // Properties
        public $userId;
        public $name;
        public $surname;
        public $accNo;
        public $personalNo;
        public $balance;
      

        function __construct($userId, $name, $surname, $accNo, $personalNo) {
            $this->userId = $userId;
            $this->name = $name;
            $this->surname = $surname;
            $this->accNo = $accNo;
            $this->personalNo = $personalNo;
            $this->balance = 0;
          }

        // Methods
        
      }
    ?>