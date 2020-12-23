<?php
include "actions/connection.php";

    if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']){
        if($_SESSION['nastavnik'] == 1){
            header('Location:nastavnik/index.php');
        }else{
            header('Location:ucenik.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Elektronski dnevnik</title>
</head>
<body>

    <form class="login-form" action="actions/login.php" method="POST">
        <h1>Login</h1>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholdr="Password">
        <button type="submit">Login</button>
    </form>
</body>
</html>