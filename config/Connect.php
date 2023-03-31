<?php

class Connect
{
    const HOST = 'localhost';
    const DBNAME = 'students';
    const USER = 'root';
    const PASSW = '';
    protected $conn = NULL;

    public function __construct() {
        $dns = 'mysql:host='.self::HOST.';dbname='.self::DBNAME.';charset=utf8mb4';
        $this->conn = new PDO($dns, self::USER, self::PASSW);

//        if ($this->conn) {
//            echo "Connect success";
//        } else {
//            echo "Error connect";
//        }
    }
}