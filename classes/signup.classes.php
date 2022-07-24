<?php

class signUp extends Dbh
{
    protected function checkUser($uid, $email)
    {
        $stmt = $this->connect()->prepare('SELECT users_id FROM ooplogin WHERE users_id = ? OR users_name = ?;');
    }
}