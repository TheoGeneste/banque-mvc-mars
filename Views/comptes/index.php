<button onclick="redirectToCreateCompte()">Ajouter un comptes</button>
<table>
    <thead>
        <th>ID</th>
        <th>Numéro de compte</th>
        <th>Solde</th>
        <th>Numéro client</th>
        <th>Actions</th>
    </thead>
    <tbody>
        <?php 
            foreach ($comptes as $compte) {
                echo "<tr>";
                    echo "<td>". $compte["ID"] ."</td>";
                    echo "<td>". $compte["NumeroCompte"] ."</td>";
                    echo "<td>". $compte["SOLDE"] ."</td>";
                    echo "<td>". $compte["FK_CLIENT"] ."</td>";
                    // Ajouter un td et un bouton faisant une redirection via une function js
                    echo "<td><button onclick='redirectToDetailsCompte(". $compte["ID"] .")'>Voir détails</button></td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
<script type="text/javascript">
    function redirectToCreateCompte(){
        window.location.replace("../../Controllers/CompteController.php?action=create")
    }

    function redirectToDetailsCompte(id) {
        window.location.replace('../../Controllers/CompteController.php?action=details&id='+ id)
    }

    // Créé la function JS pour etre rediriger
</script>