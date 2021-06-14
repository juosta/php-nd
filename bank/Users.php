
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
    // class Users {
    //     // Properties
    //     public $userId;
    //     public $name;
    //     public $surname;
    //     public $accNo;
    //     public $personalNo;
    //     public $balance;
      

    //     function __construct($user) {
    //         $this->userId = $user["userId"];
    //         $this->name = $user["name"];
    //         $this->surname = $user["surname"];
    //         $this->accNo = $user["accNo"];
    //         $this->personalNo = $user["personalNo"];
    //         $this->balance = $user["balance"];
    //       }
    //     // Methods
        
    //   }
    ?>
