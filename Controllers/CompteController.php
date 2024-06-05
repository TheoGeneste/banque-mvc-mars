<?php
require_once '../Models/Compte.php';

// Faire appelle a notre function fetchComptes()
$comptes = fetchComptes();
// Faire l'include de notre vue ../Views/comptes/index.php

include '../Views/comptes/index.php';

// Mise en place des if avec les conditions $_GET
// Le premier if vérifie que get est null si oui on afficher la page comptes/index.js
// Sinon on fait d'autre if selon $_GET['action']