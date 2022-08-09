<?php
require_once "Models/Database.php";
require_once "Models/Login.php";
require_once "Classes/Login_Validator.php";

$errors = [];

// Instantiate DB & Connect
$database = new Database();
$db = $database->connect();

// Instantiate Login Object
$new_login = new Login($db);

if (isset($_POST['sign_up'])) {
    //Validate entries
    $validation = new Login_Validator($_POST);
    $errors = $validation->validate_form();

    //Save to DB
    if (!array_filter($errors)) {
        $new_login->username = $_POST["username"];
        $new_login->password = $_POST["password"];

        //Checks for errors
        $new_login->create();

    }

}