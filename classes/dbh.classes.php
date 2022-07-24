<?php

//Creates DB connection
class Dbh
{
    protected function connect()
    {
        try {
            $username = 'root';
            $password = '123456';
            $dbh = new PDO('mysql:host=localhost;dbname=ooplogin', $username, $password);
        } catch (PDOException $e) {
            print "Error: $e->getMessage() <br />";
            die();
        }
    }
}