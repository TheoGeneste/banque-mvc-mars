<!-- Formulaire d'ajout de compte avec une action sur le fichier CompteController.php?action=insert -->
<!-- FOrmulaire en method POST -->
<h1>Formulaire Comptes</h1>
<form action="../../Controllers/CompteController.php?action=insert" method="post">
    <label for="numeroCompte">Numéro de compte</label>
    <input type="text" id="numeroCompte" name="numeroCompte" placeholder="Votre numéro de compte">
    <label for="solde">Solde</label>
    <input type="number" name="solde" id="solde" placeholder="Votre Solde">
    <label for="client">Client</label>
    <select name="client" id="client">
        <?php
            foreach ($clients as $client) {
                echo "<option value='". $client["ID"] . "'>";
                echo $client["Nom"] . " " . $client["Prenom"];
                echo "</option>";
            }
        ?>
    </select>
    <input type="submit" value="Envoyer">
</form>