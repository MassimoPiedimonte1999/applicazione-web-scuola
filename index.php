<?php require("inc/connection.inc.php"); ?>
<?php require("header.php") ?>

<body>
    <section class="main">
        <header>
            <h1>Benvenuto/a</h1>
            <ul>
                <li><a href="elenco_studenti.php">Visualizza elenco studenti</a></li>
                <li><a href="elenco_professori.php">Visualizza elenco professori</a></li>
                <li><a href="registrazione_studente.php">Registra un nuovo studente</a></li>
                <li><a href="registrazione_professore.php">Registra un nuovo professore</a></li>
                <li><a href="registrazione_classe.php">Registra una nuova classe</a></li>
                <li><a href="registrazione_consiglio_classe.php">Associa un professore a una classe</a></li>
            </ul>
        </header> 

    </section>
</body>
</html>
<!-- 
Elenco professori 
SELECT * FROM professori

Elenco professori che insegnano in 4X
SELECT p.nome, p.cognome c.xIDClassi 
FROM professori AS p, classi AS c
WHERE p.IDProfessori = c.xIDProfessori AND c.xIDClassi='$classe'

Consiglio di classe
SELECT p.nome, c.xIDClassi 
FROM professori AS p, consiglioclasse AS c
WHERE p.IDProfessori = c.xIDProfessori
-->