<?php 
require_once '../Models/Client.php';

$clients = fetchClients();

include '../Views/clients/index.php';