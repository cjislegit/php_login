<?php

class SignUp extends Database
{
    protected function setUser($userName, $pwd)
    {
        $stmt = $this->connect()->prepare('INSERT INTO ooplogin (users_name, users_password) VALUES (?, ?);');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($userName, $hashedPwd))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;

    }
    protected function checkUser($username)
    {
        $stmt = $this->connect()->prepare('SELECT users_id FROM ooplogin WHERE users_name = ?;');

        if (!$stmt->execute($username)) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }

        return $resultCheck;
    }
}