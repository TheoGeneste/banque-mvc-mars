<!-- Mettre en place le systeme de if et aller chercher tout les comptes 
 et faire un include de transacions/index.php -->
<?php 
require_once '../Models/Compte.php';

if (!isset($_GET['action'])) {
    $comptes = fetchComptes();
    include '../Views/transactions/index.php';
}else{

}