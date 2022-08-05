<?php
// require_once "classes/Database.php";
require_once "Classes/Login_Validator.php";

$test = $_POST;
$errors = [];

//Instantiate DB & Connect
// $database = new Database();
// $db = $database->connect();

//Instantiate Login Object
// $new_login = new Login($db);

if (isset($_POST['sign_up'])) {
    $validation = new Login_Validator($_POST);
    $errors = $validation->validate_form();
    $test = $errors;
}