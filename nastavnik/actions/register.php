<?php
include "../../actions/connection.php";

$username = $mysqli->real_escape_string(strip_tags($_POST['username']));
$email = $mysqli->real_escape_string(strip_tags($_POST['email']));
$password = $mysqli->real_escape_string(strip_tags($_POST['password']));

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $mysqli->query($sql);
$error = "";

if($result->num_rows > 0){
    $error = "Ovaj username je vec zauzet";
}else{
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $mysqli->query($sql);
    
    if($result->num_rows > 0){
        $error = "Ovaj email je zauzet";
    } else {
        $password = password_hash( $password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";

        if($mysqli->query($sql)){
            $_SESSION['message'] = "Nalog za ucenika je uspesno kreiran";
            header('Location:../index.php');
        }else{
            $error = "Greska pri kreiranju korisnika";
        }
    }
}

echo $error;