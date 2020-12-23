<?php include "header.php"; ?>
<?php
    if(isset($_SESSION['message'])){
        echo "<p class='message-success'>" . $_SESSION['message']. "</p>";

        unset($_SESSION['message']);
    }
?>

    <form class="ocena-form" action="actions/upisOcene.php" method="POST">

        <input type="hidden" name="ucenik_id" value="<?php echo $_GET['ucenik_id']; ?>">

        <select name="predmet">
            <option value="Programiranje">Programiranje</option>
            <option value="Matematika">Matematika</option>
            <option value="Engleski">Engleski</option>
            <option value="Hemija">Hemija</option>
            <option value="Fizika">Fizika</option>
        </select>

        <input type="number" max="5" min="1" name="ocena">

        <button type="submit">Oceni</button>

    </form>

<?php include "footer.php"; ?>