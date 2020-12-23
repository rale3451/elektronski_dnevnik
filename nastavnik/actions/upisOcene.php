<?php include "../../actions/connection.php";

$predmet = $mysqli->real_escape_string(strip_tags($_POST['predmet']));
$ocena = $mysqli->real_escape_string(strip_tags($_POST['ocena']));
$ucenik_id = $mysqli->real_escape_string(strip_tags($_POST['ucenik_id']));

$sql = "SELECT * FROM ocene WHERE ucenik_id = '$ucenik_id' AND predmet = '$predmet'";

$result = $mysqli->query($sql);

if($result->num_rows > 0){
    $error = "Ucenik je vec dobio ocenu.";
} else{
    $sql = "INSERT INTO ocene( ucenik_id, predmet, ocena) VALUES ('$ucenik_id','$predmet','$ocena')";

    if($mysqli->query($sql)){
        $_SESSION['message'] = "Ucenik je dobio ocenu";
        header('Location:../dodajOcenu.php?ucenik_id='.$ucenik_id);
    }else{
        $error = "Doslo je do greske";
    }
}

echo $error;