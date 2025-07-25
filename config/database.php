<?php

use Medoo\Medoo;

require '../vendor/autoload.php';

class Database {
    public $conn;

    public function __construct() 
    {
        $this->conn = new Medoo([
           'type' => 'mysql',
           'database' => 'taskdb',
           'host' => 'localhost',
           'username' => 'root',
           'password' => 'root'
        ]);
    }
}