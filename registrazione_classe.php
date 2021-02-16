<?php require("inc/connection.inc.php"); ?>
<?php require("header.php") ?>

<?php
    if(isset($_POST['submit-classe'])) {
        $idclasse = mysqli_real_escape_string($conn, $_POST['idclasse']);
        $classe = mysqli_real_escape_string($conn, $_POST['classe']);
        $sezione = mysqli_real_escape_string($conn, $_POST['sezione']);

        $query = mysqli_query($conn, "INSERT INTO classi (IDClassi, classe, sezione) VALUES ('$idclasse', '$classe', '$sezione')");
        if(!$query) echo mysqli_error($conn);
    }
?>

<body>
    <section class="main-registrazione_classe">
        <h2>Registra una nuova classe</h2>
        <form action="registrazione_classe.php" method="POST">
            <label>Classe per intero: <input type="text" name="idclasse" placeholder="es. 4X"></label><br>
            <label>Classe: <input type="text" name="classe" placeholder="es. 4"></label><br>
            <label>Sezione: <input type="text" name="sezione" placeholder="es. X"></label><br>
            <label><input type="submit" name="submit-classe"></label><br><br>
        </form>
    </section>
</body>

<?php require("footer.php"); ?>