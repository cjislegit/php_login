<?php
class SignUpContr
{
    private $userName;
    private $password;

    public function __construct($userName, $password)
    {
        $this->userName = $userName;
        $this->password = $password;
    }

    //Sign up user
    private function signupUser()
    {
        if ($this->emptyInput() == false) {
            //echo "Empty input!";
            header("location: ../index.php?error=emtptyinput");
            exit();
        }

        if ($this->invlaidUserName() == false) {
            //echo "Invalid username!";
            header("location: ../index.php?error=invalidusername");
            exit();
        }

        if ($this->userNameTakenCheck() == false) {
            //echo "Username taken!";
            header("location: ../index.php?error=usernametaken");
            exit();
        }

        $this->setUser($this->userName, $this->password);

    }

    //Checks for empty input
    private function emptyInput()
    {
        $result;
        if (empty($this->userName) || empty($this->password)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    //Checks for invald username
    private function invlaidUserName()
    {
        $result;
        if (!preg_match('/^[a-zA-Z0-9]*$/', $this->userName)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    //Check if username exits
    private function userNameTakenCheck()
    {
        $result;
        if (!$this->checkUser($this->userName)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}