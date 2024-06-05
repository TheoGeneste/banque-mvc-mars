<?php 
    
class BDD {

    function connect(){
        try {
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=banquemars', 'root', '');
            return $pdo;
        } catch (PDOException $e) {
            echo 'Une erreur est survenue ' . $e->getMessage();
        }
    }

}