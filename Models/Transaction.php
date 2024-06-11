<!-- Faire la function qui vient chercher toutes mes transactions -->
<?php
require_once 'BDD.php';

function fetchTransactions(){
    $bdd = new Bdd();
    $conn = $bdd->connect();
    $request = $conn->prepare('SELECT ID, CompteBeneficiaire, CompteDebiteur, Montant, Date FROM transactions;');
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

function insertTransaction($compteBeneficiaire, $compteDebiteur, $montant) {
    $bdd = new Bdd();
    $conn = $bdd->connect();
    $request = $conn->prepare('INSERT INTO transactions(CompteBeneficiaire, CompteDebiteur, Montant, Date)
                                VALUES (?,?,?, NOW())');
    $request->execute([$compteBeneficiaire, $compteDebiteur, $montant]);
}