<?php require("inc/connection.inc.php"); ?>
<?php require("header.php") ?>

<?php
    if(isset($_POST['submit-studente'])) {
        $matricola = mysqli_real_escape_string($conn, $_POST['matricola']);
        $nome = mysqli_real_escape_string($conn, $_POST['nome']);
        $cognome = mysqli_real_escape_string($conn, $_POST['cognome']);
        $citta = mysqli_real_escape_string($conn, $_POST['citta']);
        $indirizzo = mysqli_real_escape_string($conn, $_POST['indirizzo']);
        $classe = mysqli_real_escape_string($conn, $_POST['classe']);

        $query = mysqli_query($conn, "INSERT INTO studenti (IDStudenti, nome, cognome, citta, indirizzo, xIDClassi) VALUES ('$matricola', '$nome', '$cognome', '$citta', '$indirizzo', '$classe')");
        if(!$query) echo mysqli_error($conn);
    }
?>

<body>
    <section class="main-registrazione_studente">
        <h2>Registra un nuovo studente</h2>
        <form action="registrazione_studente.php" method="POST">
            <label>Codice di matricola: <input type="text" name="matricola" placeholder="es. A0E546UX97"></label><br>
            <label>Nome: <input type="text" name="nome" placeholder="es. Mario"></label><br>
            <label>Cognome: <input type="text" name="cognome" placeholder="es. Rossi"></label><br>
            <label>Città: <input type="text" name="citta" placeholder="es. Napoli"></label><br>
            <label>Indirizzo di residenza: <input type="text" name="indirizzo" placeholder="es. via Nuova Poggioreale"></label><br>
            <label>Classe: <input type="text" name="classe" placeholder="es. 4X"></label><br>
            <label><input type="submit" name="submit-studente"></label><br><br>
            <i>La classe a cui appartiene lo studente dev'essere presente nel database, clicca <a href="classi.php">QUI</a> per avere un elenco delle classi disponibili!</i>
        </form>
    </section>
</body>

<?php require("footer.php"); ?>