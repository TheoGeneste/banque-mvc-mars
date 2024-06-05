<?php
require_once '../Models/Compte.php';

// Faire appelle a notre function fetchComptes()
$comptes = fetchComptes();
// Faire l'include de notre vue ../Views/comptes/index.php

include '../Views/comptes/index.php';