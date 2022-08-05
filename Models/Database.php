<?php

//Creates DB connection
class Database
{
    //DB Params
    private $host = "localhost";
    private $db = "ooplogin";
    private $username = 'root';
    private $password = '123456';
    private $conn;

    //DB Connect
    public function connect()
    {
        $this->conn = null;

        try {
            //Create PDO instance
            $this->conn = new PDO("mysql:host=$this->host; dbname=$this->db", $this->username, $this->password);
            //Turns on Erros for PDO
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $error) {
            echo "Connection Error: $error->getMessage();";

        }
        return $this->conn;
    }
}