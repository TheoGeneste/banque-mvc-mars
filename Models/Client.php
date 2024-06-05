<?php
require_once 'BDD.php';

function fetchClients() {
    // Crée un instance de BDD
    $bdd = new BDD();
    // Appelle notre fonction connect crée dans MODEL/BDD.php
    $conn = $bdd->connect();
    // Grace A PDO on peut préparer une requête;
    $request = $conn->prepare('SELECT ID, Nom, Prenom, Mail, Telephone FROM clients;');
    // Grace A PDO on peut executer la requete préparer 
    $request->execute();
    // Renvoie les données du tableau dans php
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

function insertClient($nom, $prenom, $mail, $telephone){
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare('INSERT INTO clients (Nom, Prenom, Mail, Telephone) VALUES (?,?,?,?);');
    $request->execute([$nom, $prenom, $mail, $telephone]);
}