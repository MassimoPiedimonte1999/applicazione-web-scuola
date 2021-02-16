<?php require("inc/connection.inc.php"); ?>
<?php require("header.php") ?>

<?php
    if(isset($_POST['submit-consiglioclasse'])) {
        $matricola = mysqli_real_escape_string($conn, $_POST['matricola']);
        $classe = mysqli_real_escape_string($conn, $_POST['classe']);

        $query = mysqli_query($conn, "INSERT INTO consiglioclasse (xIDProfessori, xIDClassi) VALUES ('$matricola', '$classe')");
        if(!$query) echo mysqli_error($conn);
    }
?>

<body>
    <section class="main-registrazione_consiglioclasse">
        <h2>Registra un nuovo professore</h2>
        <form action="registrazione_consiglio_classe.php" method="POST">
            <label>Matricola del professore: <input type="text" name="matricola" placeholder="es. B0E546UX95"></label><br>
            <label>Classe di assegnazione: <input type="text" name="classe" placeholder="es. 1A"></label><br>
            <label><input type="submit" name="submit-consiglioclasse"></label><br><br>
        </form>
    </section>
</body>

<?php require("footer.php"); ?>