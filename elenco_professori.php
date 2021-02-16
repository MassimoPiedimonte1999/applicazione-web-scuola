<?php require("inc/connection.inc.php"); ?>
<?php require("header.php") ?>

    <section class="main-professori">
        <h2>Elenco dei professori</h2>
        <table>
		<tr>
			<th>Matricola</th>
			<th>Nome</th>
			<th>Cognome</th>
			<th>Città</th>
			<th>Indirizzo</th>
		</tr>
            <?php
                $sql = "SELECT * FROM professori";
                $rows = mysqli_query($conn, $sql);
                if(mysqli_num_rows($rows) > 0) {
                    while($row = mysqli_fetch_assoc($rows)) {
                        echo "<tr>";
                        echo "<td><a href='consiglio_professore.php?prof=".$row['IDProfessori']."'>".$row['IDProfessori']."</a></td>";
                        echo "<td>".$row['nome']."</td>";
                        echo "<td>".$row['cognome']."</td>";
                        echo "<td>".$row['citta']."</td>";
                        echo "<td>".$row['indirizzo']."</td>";
                        echo "</tr>";
                    }
                }
            ?>
        </table>
    </section>
    <?php require("footer.php"); ?>