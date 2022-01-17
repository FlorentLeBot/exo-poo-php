<?php

class Produit{
    public string $nom;
    public float $prix;

    public function __construct(string $nom, float $prix){
        $this->nom=$nom;
        $this->prix=$prix;
    }
    public function info(){
        echo $this->nom . " vaut " . $this->prix . " €.".PHP_EOL;
    }
}