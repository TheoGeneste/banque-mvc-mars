<table>
    <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Mail</th>
        <th>Numéro de telephone</th>
    </thead>
    <tbody>
        <?php 
          foreach ($clients as $client) {
            echo "<tr>";
                echo "<td>". $client["ID"] ."</td>";
                echo "<td>". $client["Nom"] ."</td>";
                echo "<td>". $client["Prenom"] ."</td>";
                echo "<td>". $client["Mail"] ."</td>";
                echo "<td>". $client["Telephone"] ."</td>";
            echo "</tr>";
          }
        ?>
    </tbody>
</table>