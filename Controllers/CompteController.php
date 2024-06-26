<?php
require_once '../Models/Compte.php';
require_once '../Models/Client.php';
// Mise en place des if avec les conditions $_GET
// Le premier if vérifie que get est null si oui on afficher la page comptes/index.js
// Sinon on fait d'autre if selon $_GET['action']
if (!isset($_GET['action'])) {
   // Faire appelle a notre function fetchComptes()
    $comptes = fetchComptes();
    // Faire l'include de notre vue ../Views/comptes/index.php

    include '../Views/comptes/index.php';
}else{
    if($_GET['action'] == 'create') {
        $clients = fetchClients();
        include '../Views/comptes/create.php';
    }   
    if($_GET['action'] == 'insert') {
        $numeroCompte = $_POST['numeroCompte'];
        $solde = $_POST['solde'];
        $FKClient = $_POST['client'];
        insertCompte($numeroCompte, $solde, $FKClient);
        header('Location: CompteController.php');
    }
    // ajouter une condition $_GET['action'] == details
    // Récuperer l'id du compte 
    // afficher les infos du compte et du client associer a celui ci
    // Faire un includes de la page comptes/details.php
    if ($_GET['action'] == "details") {
        $id = $_GET["id"];
        $compte = getCompteByID($id);
        include "../Views/comptes/details.php";
    }
}