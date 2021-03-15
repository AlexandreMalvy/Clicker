<?php 

class Equipement{
    private $_nom;//string
    private $_type; //defini le type de l'equipement (Arme,Armure ou Amulette)
    private $_element;//defini l'élement de l'équipement
    private $_dgtAjoutes;//indique les dégat que l'equipement ajoute au hero
    private $_valeur;//indique le prix marchand de l'equipement
    private $_tauxDrop;//indique le taux de chance que l'equipement se drop après la mort d'un monstre
    private $_rarete;//indique la rareté de l'equipement (commun,peu commun,rare,epic,legendaire,unique)
    private $_buff;//indique l'effet des buffs de certain equipement
    private $_classeAutorise;//indique les classes autorisé à utiliser cet objet

    public function __construct($nom,$type,$element,$dgtAjoutes,$valeur,$tauxDrop,$rarete,$buff,$classeAutorise){
        $this->_nom = $nom;
        $this->_type = $type;
        $this->_element = $element;
        $this->_dgtAjoutes = $dgtAjoutes;
        $this->_valeur = $valeur;
        $this->_tauxDrop = $tauxDrop;
        $this->_rarete = $rarete;
        $this->_buff = $buff;
        $this->_classeAutorise = $classeAutorise;
    }

    public function getNom(){
    
        return $this->_nom;

    }
    public function getType(){
    
        return $this->_type;
    }
    public function getElement(){

        return $this->_element;
    }
    public function getDgtAjoutes(){
    
        return $this->_dgtAjoutes;
    }
    public function getValeur(){
    
        return $this->_valeur;
    }
    public function getTauxDrop(){
    
        return $this->_tauxDrop;
    }
    public function getRarete(){
    
        return $this->_rarete;
    } 
    public function getBuff(){
    
        return $this->_buff;
    }
    public function getClasseAutorise(){
    
        return $this->_classeAutorise;
    }
    public function setNom($_nom){
    
        $this->_nom = $_nom;

        return $this;
    }
    public function setType($_type){
    
        $this->_type = $_type;

        return $this;
    }
    public function setElement($_element){

        $this->_element = $_element;

        return $this;
    }
    public function setDgtAjoutes($_dgtAjoutes){
    
        $this->_dgtAjoutes = $_dgtAjoutes;

        return $this;
    }
    public function setValeur($_valeur){
    
        $this->_valeur = $_valeur;

        return $this;
    }
    public function setTauxDrop($_tauxDrop){
    
        $this->_tauxDrop = $_tauxDrop;

        return $this;
    } 
    public function setRarete($_rarete){
    
        $this->_rarete = $_rarete;

        return $this;
    }
    public function setBuff($_buff){
    
        $this->_buff = $_buff;

        return $this;
    }
    public function setClasseAutorise($_classeAutorise){
    
        $this->_classeAutorise = $_classeAutorise;

        return $this;
    }
}    
