<?php

class User_Model
{

    private $pdo;

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getConnect();
    }

    public function register($body)
    {
        echo "<h1>Regisztráció!</h1>";
        echo "<br>";
        var_dump($body);
    }

    public function login($body)
    {
        echo "<h1>Bejelentkezés!</h1>";
        echo "<br>";
        var_dump($body);
    }
}
