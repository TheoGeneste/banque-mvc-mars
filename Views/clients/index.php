<button onclick="redirectToCreateClient()">Ajouter un client</button>
<table>
    <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Mail</th>
        <th>Numéro de telephone</th>
        <th>Actions</th>
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
                echo '<td> <button onclick="redirectToDetailsClient('.$client["ID"].')"> Voir Client </button></td>';
            echo "</tr>";
          }
        ?>
    </tbody>
</table>

<script type="text/javascript">
  function redirectToCreateClient() {
    // ?action=create fait en sorte de passer une valeur par la méthode GET
    window.location.replace("../../Controllers/ClientController.php?action=create");
  }

  function redirectToDetailsClient(clientId){
    window.location.replace("../../Controllers/ClientController.php?action=details&id=" + clientId)
  }
</script> 