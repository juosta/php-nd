<?php
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