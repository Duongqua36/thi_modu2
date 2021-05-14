<?php
namespace App\Model;

use PDO;
use PDOException;

class DBconnect {

    protected string $dsn;
    protected string $username;
    protected string $password;


    public function __construct()
    {
        $this->dsn='mysql:host=localhost;dbname=thi_module2';
        $this->username= 'root';
        $this->password='123456789';
    }
    function connect()
    {
        $conn = null;
        try {
            return new PDO($this->dsn,$this->username,$this->password);
        }catch (PDOException $PDOException) {
            echo 'Server error';
        }
    }
}
