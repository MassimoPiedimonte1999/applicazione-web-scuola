<?php require("inc/connection.inc.php"); ?>
<?php require("header.php") ?>

    <section class="main-consiglio">
        <h2>Elenco degli studenti</h2>
        <table>
		<tr>
			<th>Matricola</th>
			<th>Nome</th>
			<th>Cognome</th>
			<th>Città</th>
			<th>Indirizzo</th>
			<th>Classe</th>
		</tr>
            <?php
                $sql = "SELECT * FROM studenti";
                $rows = mysqli_query($conn, $sql);
                if(mysqli_num_rows($rows) > 0) {
                    while($row = mysqli_fetch_assoc($rows)) {
                        echo "<tr>";
                        echo "<td>".$row['IDStudenti']."</td>";
                        echo "<td>".$row['nome']."</td>";
                        echo "<td>".$row['cognome']."</td>";
                        echo "<td>".$row['citta']."</td>";
                        echo "<td>".$row['indirizzo']."</td>";
                        echo "<td><a href='classe_studenti.php?classe=".$row['xIDClassi']."'>".$row['xIDClassi']."</a></td>";
                        echo "</tr>";
                    }
                }
            ?>
        </table>
    </section>
    <?php require("footer.php"); ?>