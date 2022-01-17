<?php

class Utilisateur{
    public string $nom;
    public string $motDePasse;

    public function __construct(string $nom, string $motDePasse){
        $this->nom=$nom;
        $this->motDePasse=$motDePasse;
    }
    
}