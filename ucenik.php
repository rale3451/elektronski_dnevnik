<?php
include "actions/connection.php";

if($_SESSION['nastavnik']==1){
    header('Location:nastavnik/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Ucenik</title>
</head>
<body>
    <a href="actions/logout.php">Logout</a>

    <br><br>
    

    <form method="POST" id="domaciUpload" enctype="multipart/form-data" action="actions/domaci.php">
        <h1>Uploaduj domaci</h1>
        <input type="file" name="domaci">
        <button type="submit" id="uploadBtn">Upload</button>

    </form>

    <h1>Tvoje ocene</h1>

    <table class="table">
    <tr>
        <th>Predmet</th>
        <th>Ocene</th>
    </tr>

<?php
    $sql = "SELECT * FROM ocene WHERE ucenik_id = ".$_SESSION['user_id'];

    $result = $mysqli->query($sql);

    while($row = $result->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $row['predmet']; ?></td>
        <td><?php echo $row['ocena']; ?></td>
    
    </tr>

    <?php
    }

?>

    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>