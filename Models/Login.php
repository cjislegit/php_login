<?php

class Login
{
    //DB Info
    private $conn;
    private $table = "ooplogin";

    //Login Properties
    public $id;
    public $username;
    public $password;

    //Constructor with DB
    public function __construct($db)
    {
        $this->conn = $db;
    }

    //Create Login
    public function create()
    {
        //Create Query
        $sql = "INSERT INTO ooplogin(users_name, users_password) VALUES(:username, :password)";

        //Prepare statement
        $stmt = $this->conn->prepare($sql);

        //Clean Data
        $this->usernae = htmlspecialchars(strip_tags($this->username));
        $this->password = password_hash(htmlspecialchars(strip_tags($this->password)), PASSWORD_DEFAULT);

        //Bind Data
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":password", $this->password);

        //Execute Query
        if ($stmt->execute()) {
            $this->id = $this->conn->lastInsertId();
            return true;
        } else {
            //Print Error
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }
}