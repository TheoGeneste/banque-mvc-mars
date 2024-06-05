<?php 

require_once("BDD.php");

// Crée la function fetchComptes qui sera appeler dans CompteController.php

function fetchComptes() {
    $bdd = new Bdd();
    $conn = $bdd->connect();
    $request = $conn->prepare("SELECT ID, NumeroCompte, SOLDE, FK_CLIENT FROM comptes");
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}
