<?php

require_once("Utilisateur.php");
require_once("Client.php");
require_once("Admin.php");
require_once("Produit.php");

$monProduit1 = new Produit("Dark Soul 3", 49.90);
$monProduit2 = new Produit("The Witcher 3", 39.90);

$admin = new Admin("Florent", "azerty");
//var_dump($admin);

var_dump($admin->creerClient("John", "123"));


// var_dump($monProduit1).PHP_EOL;
// var_dump($monProduit1->info());
