<?php
    $host = "localhost";
    //inserisci le tue credenziali qui
    $user = "<username>";
    $pass = "<password>";
    $db = "scuola";
    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn) die("Errore nella connessione al database!");