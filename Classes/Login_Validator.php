<?php

class Login_Validator
{
    private $login_data;
    private $errors = [];
    private static $fields = ["username", "password"];

    //construct which takes in POST data
    public function __construct($post_data)
    {
        $this->login_data = $post_data;
    }

    //Check if fields are present in data
    public function validate_form()
    {
        $this->validate_username();
        $this->validate_password();

        return $this->errors;
    }

    //Method validates uername
    private function validate_username()
    {

        $val = trim($this->login_data["username"]);

        if (empty($val)) {
            $this->addError("username", "username cannont be empty");
        } else {
            if (!preg_match("/^[a-zA-Z0-9]{6,12}$/", $val)) {
                $this->addError("username", "username must be 6-12 chars & alphanumberic");

            }
        }

    }

    private function validate_password()
    {
        $val = trim($this->login_data["password"]);

        if (empty($val)) {
            $this->addError("password", "password cannont be empty");
        } else {
            if (!preg_match("/^[a-zA-Z0-9]{6,12}$/", $val)) {
                $this->addError("password", "password must be 6-12 chars & alphanumberic");

            }
        }

    }

    //Adss errors to array
    private function addError($key, $val)
    {
        $this->errors[$key] = $val;
    }

}