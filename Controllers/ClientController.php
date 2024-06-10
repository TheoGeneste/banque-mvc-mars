<?php 
require_once '../Models/Client.php';
require_once '../Models/Compte.php';

if(!isset($_GET['action'])){
    $clients = fetchClients();
    include '../Views/clients/index.php';
}else{
    if ($_GET['action'] == "create") {
        include '../Views/clients/create.php';
    }
    if ($_GET['action'] == 'insert') {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $telephone = $_POST['telephone'];
        insertClient($nom, $prenom, $mail, $telephone);
        header('Location: ClientController.php');
    }
    if ($_GET['action'] == 'details') {
        $id = $_GET['id'];
        $client = getClientByID($id);
        $comptes =  getComptesByClient($id);    
        include '../Views/clients/details.php';
    }
}