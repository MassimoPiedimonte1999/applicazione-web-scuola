<?php require("inc/connection.inc.php"); ?>
<?php require("header.php") ?>

<?php
    if(isset($_POST['submit-professore'])) {
        $matricola = mysqli_real_escape_string($conn, $_POST['matricola']);
        $nome = mysqli_real_escape_string($conn, $_POST['nome']);
        $cognome = mysqli_real_escape_string($conn, $_POST['cognome']);
        $citta = mysqli_real_escape_string($conn, $_POST['citta']);
        $indirizzo = mysqli_real_escape_string($conn, $_POST['indirizzo']);

        $query = mysqli_query($conn, "INSERT INTO professori (IDProfessori, nome, cognome, citta, indirizzo) VALUES ('$matricola', '$nome', '$cognome', '$citta', '$indirizzo')");
        if(!$query) echo mysqli_error($conn);
    }
?>

<body>
    <section class="main-registrazione_professore">
        <h2>Registra un nuovo professore</h2>
        <form action="registrazione_professore.php" method="POST">
            <label>Codice di matricola: <input type="text" name="matricola" placeholder="es. A0E546UX97"></label><br>
            <label>Nome: <input type="text" name="nome" placeholder="es. Luigi"></label><br>
            <label>Cognome: <input type="text" name="cognome" placeholder="es. Bianchi"></label><br>
            <label>Città: <input type="text" name="citta" placeholder="es. Napoli"></label><br>
            <label>Indirizzo di residenza: <input type="text" name="indirizzo" placeholder="es. via Nuova Poggioreale"></label><br>
            <label><input type="submit" name="submit-professore"></label><br><br>
        </form>
    </section>
</body>

<?php require("footer.php"); ?>