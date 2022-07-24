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
}