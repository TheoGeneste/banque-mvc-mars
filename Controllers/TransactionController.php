<!-- Mettre en place le systeme de if et aller chercher tout les comptes 
 et faire un include de transacions/index.php -->
<?php 
require_once '../Models/Compte.php';
require_once '../Models/Transaction.php';

if (!isset($_GET['action'])) {
   // Aller chercher toutes les transaction grace au model
//    include de transactions/index.php
    $transactions = fetchTransactions();
    include '../Views/transactions/index.php';
}else{
    if ($_GET['action'] == "create") {
        $comptes = fetchComptes();
        include '../Views/transactions/create.php';
    }
    if ($_GET['action'] == "insert") {
        $debiteur = $_POST['debiteur'];
        $montant = $_POST['montant'];
        $beneficiaire = $_POST['beneficiaire'];
        updateCompteMontantDebiteur($montant, $debiteur);
        updateCompteMontantBeneficiaire($montant, $beneficiaire);
        insertTransaction($beneficiaire,$debiteur, $montant);
        header('Location: TransactionController.php');
    }

}