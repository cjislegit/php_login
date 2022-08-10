<?php
require_once "controller/Controller.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3e848d41da.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <title>PHP Login</title>
</head>

<body>
    <div>
        <?php
foreach ($errors as $error):
    echo "$error <br />";
endforeach
;?>
    </div>
    <h1>PHP LOGIN FORM</h1>
    <div class="loginContainer">

        <form method="POST">
            <div class="logo">
                <i class="fa-solid fa-meteor fa-2xl"></i>
            </div>
            <div class="inputContainer">
                <i class="fa-solid fa-user-large icon"></i>
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="inputContainer">
                <i class="fa-solid fa-lock icon"></i>
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="buttonContainer">
                <button type="submit" name="log in">Log In</button>
                <button type="submit" name="sign up">Sign Up</button>
            </div>
        </form>
    </div>
</body>

</html>