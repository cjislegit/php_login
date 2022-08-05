<?php

class Login
{
    //DB Info
    private $conn;
    private $table = "ooplogin";

    //Login Properties
    public $email;
    public $password;

    //Constructor with DB
    public function __construct($db)
    {
        $this->conn = $db;
    }
}