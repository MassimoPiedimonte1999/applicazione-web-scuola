<?php require("inc/connection.inc.php"); ?>
<?php require("header.php") ?>

<body>
    <?php
        if(isset($_GET['prof'])) {
            $prof = mysqli_real_escape_string($conn, $_GET["prof"]);
    ?>
    <section class="main-professori">
        <h2>Il prof. <?php echo $prof ?> insegna nelle seguenti classi: </h2>
        <table>
            <tr>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Classe</th>
            </tr>
            <?php
                $sql = "SELECT p.nome, p.cognome, xIDClassi FROM consiglioclasse, professori AS p WHERE xIDProfessori='$prof' AND p.IDProfessori=xIDProfessori";
                $rows = mysqli_query($conn, $sql);
                if(!$rows) echo mysqli_error($conn);
                if(mysqli_num_rows($rows) > 0) {
                    while($row = mysqli_fetch_assoc($rows)) {
                        echo "<tr>";
                        echo "<td>".$row['nome']."</td>";
                        echo "<td>".$row['cognome']."</td>";
                        echo "<td>".$row['xIDClassi']."</td>";
                        echo "</tr>";
                    }
                }
            ?>
        </table>
    </section>
    <?php
    }

    require("footer.php");
    ?>

