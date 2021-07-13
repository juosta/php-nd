<?php
namespace Bank;

use App\DB\DataBase;
use PDO;

class Maria implements DataBase {

    private static $db;
    private $pdo;

    public static function getMaria() // singletono paternas
    {
        return self::$db ?? self::$db = new self;
    }

    private function __construct()
    {
        $port='3307';
        $host = '127.0.0.1';
        $db   = 'newdb';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $this->pdo = new PDO($dsn, $user, $pass, $options);
    }



    public function create(array $userData) : void
    {
        $keys = implode(",",array_keys($userData));
        $values =  array_values($userData);
        foreach ($values as &$val) {
            $val = "'$val'";
        }
        $arr =  implode(',', $values);
        $sql =
        "INSERT INTO users ($keys)
        VALUES ($arr)";
        $this->pdo->query($sql);

    }
 
    public function update(int $userId, array $userData) : void
    {
        $sql =
        "UPDATE users
        SET `balance` = ".$userData['balance']."
        WHERE id = $userId";


        $this->pdo->query($sql);
    }
 
    public function delete(int $userId) : void
    {
        $sql =
        "DELETE FROM users
        WHERE id = $userId";
        $this->pdo->query($sql);
    }
 
    public function show(int $userId) : array
    {
        $sql = 
        "SELECT id as userId, name, surname, accNo, balance
        FROM users
        WHERE id = $userId
        ";
        $stmt = $this->pdo->query($sql);
        $row = $stmt->fetch();
        return $row;

    }
    
    public function showAll() : array {
        $sql = 
        "SELECT id as userId, name, surname, accNo, personalNo, balance
        FROM users
        ORDER BY `surname`
        ";
        $all = [];
        $stmt = $this->pdo->query($sql);
        while ($row = $stmt->fetch())
        {
            $all[] = $row;
        }
        return $all;
    }

    public function getEmployee(string $code, string $pass) : array
    {
        $sql = 
        "SELECT *
        FROM employees
        WHERE code = ? AND pass = ?
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$code, $pass]);
        $user = $stmt->fetch();
        return false === $user ? [] : $user;
    }

}