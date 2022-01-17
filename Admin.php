<?php
require_once("Utilisateur.php");
require_once("Client.php");


class Admin extends Utilisateur{

    
    // private array $nouveauClient = [];

    public function supprimerProduit(){

    }
    public function ajouterProduit(){

    }
    public function compterProduit(){

    }
    
    public function creerClient(){
        return new Client($this->nom,$this->motDePasse);
       
    }
    

}