<form action="../../Controllers/ClientController.php?action=insert" method="post">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom" placeholder="Renseigner le nom du client" required>
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom" placeholder="Renseigner le Prénom du client" required>
    <label for="mail">Mail</label>
    <input type="email" name="mail" id="mail" placeholder="Renseigner le mail du client">
    <label for="telephone">Téléphone</label>
    <input type="text" name="telephone" id="telephone" placeholder="Renseigner le telephone du client">
    <input type="submit" value="Envoyer">
</form>
