<?php require("inc/connection.inc.php"); ?>
<?php require("header.php") ?>

    <section class="main-classi">
        <h2>Elenco delle classi dell'Istituto</h2>
        <table>
		<tr>
			<th>Classe</th>
		</tr>
            <?php
                $sql = "SELECT IDClassi FROM classi";
                $rows = mysqli_query($conn, $sql);
                if(mysqli_num_rows($rows) > 0) {
                    while($row = mysqli_fetch_assoc($rows)) {
                        echo "<tr>";
                        echo "<td>".$row['IDClassi']."</td>";
                        echo "</tr>";
                    }
                }
            ?>
        </table>
    </section>
    <?php require("footer.php"); ?>