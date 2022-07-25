<?php

//Checks if the submit form was passed through
if (isset($_POST['submit'])) {

    //Grab data from post
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    //Include and instantiate signUp controller class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signupContr.classes.php";

    $signUp = new SignUpContr($userName, $password);

    //Running err handlers and sign up
    $signUp->signupUser();

    //Go back to front page
    header("location: ../index?error=none");

}