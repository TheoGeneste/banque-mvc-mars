<!-- Ici je veux un formulaire avec une liste selective pour le compte debiteur 
Un champ montatn
Et un liste selective pour le compte beneficiaire, ces deux listes devront reprendre les comptes 
existant en bdd comme pour client dans la création d'un compte -->
<h2>Transactions</h2>
<form action="../../Controllers/TransactionController.php?action=insert" method="post">
    <label for="debiteur">Compte débiteur</label>
    <select name="debiteur" id="debiteur">
        <!-- Foreach pour afficher mes comptes -->
        <?php
            foreach ($comptes as $compte) {
                echo "<option value='".$compte['ID']."'>".$compte['NumeroCompte']."</option>";
            }
        ?>
    </select>
    <label for="montant">Montant</label>
    <input type="number" id="montant" name="montant">
    <label for="beneficiaire">Bénéficiaire</label>
    <select name="beneficiaire" id="beneficiaire">
        <!-- Foreach pour afficher mes comptes -->
        <?php
            foreach ($comptes as $compte) {
                echo "<option value='".$compte['ID']."'>".$compte['NumeroCompte']."</option>";
            }
        ?>
    </select>
    <input type="submit" value="Envoyer">
</form>