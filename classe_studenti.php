<?php require("inc/connection.inc.php"); ?>
<?php require("header.php") ?>

<body>
    <?php
        if(isset($_GET['classe'])) {
            $classe = mysqli_real_escape_string($conn, $_GET["classe"]);
    ?>
    <section class="main-studenti">
        <h2>Elenco degli studenti della <?php echo $classe ?></h2>
        <table>
            <tr>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Classe</th>
            </tr>
            <?php
                $sql = "SELECT s.nome, s.cognome, c.IDClassi FROM studenti AS s, classi AS c WHERE s.xIDClassi = c.IDClassi AND s.xIDClassi='$classe'";
                $rows = mysqli_query($conn, $sql);
                if(!$rows) echo mysqli_error($conn);
                if(mysqli_num_rows($rows) > 0) {
                    while($row = mysqli_fetch_assoc($rows)) {
                        echo "<tr>";
                        echo "<td>".$row['nome']."</td>";
                        echo "<td>".$row['cognome']."</td>";
                        echo "<td>".$row['IDClassi']."</td>";
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

