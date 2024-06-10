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

// Créé la fonction insertCompte pour inserer en bdd
function insertCompte($numeroCompte, $solde, $FKClient){
    $bdd = new Bdd();
    $conn = $bdd->connect();
    $request = $conn->prepare("INSERT INTO comptes(NumeroCompte, SOLDE, FK_CLIENT) VALUES (?,?,?);");
    $request->execute([$numeroCompte, $solde, $FKClient]);
}

function getComptesByClient($idClient){
    $bdd = new Bdd();
    $conn = $bdd->connect();
    $request = $conn->prepare("SELECT ID, NumeroCompte, SOLDE FROM comptes WHERE FK_CLIENT= ?");
    $request->execute([$idClient]);
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

// Crée une fonction pour récuperer le compte par son id avec les infos du client (JOINTURE)