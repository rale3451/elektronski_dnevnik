<?php
include "../actions/connection.php";

if($_SESSION['nastavnik'] == 0){
    header('Location:../ucenik.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Nastavnik</title>
</head>
<body>
<div class="main-manu">
    <h1>Nastavnikov Dnevnik</h1>
    <a href="index.php">Lista ucenika</a>
    <a href="noviucenik.php">Dodaj novog učenika</a>
    <a href="../actions/logout.php">Logout</a>
</div>  