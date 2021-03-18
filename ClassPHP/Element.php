<?php

class Element{
    protected $_nom;
    protected $_feu;
    protected $_terre;
    protected $_metal;
    protected $_eau;
    protected $_plante;
    protected $_lumiere;
    protected $_tenebres;

    protected function __construct(){
        $this->_nom = "";
        $this->_feu = 0;
        $this->_terre = 0;
        $this->_metal = 0;
        $this->_eau = 0;
        $this->_plante = 0;
        $this->_lumiere = 0;
        $this->_tenebres = 0;
    }


    public function afficherDgt(){
        $str = "<p>Element ".$this->getNom()."<br>";
        $str.= "Dégats contre Feu : dégats x<b>".$this->getFeu()."</b><br>";
        $str.= "Dégats contre Terre : dégats x<b>".$this->getTerre()."</b><br>";
        $str.= "Dégats contre Métal : dégats x<b>".$this->getMetal()."</b><br>";
        $str.= "Dégats contre Eau : dégats x<b>".$this->getEau()."</b><br>";
        $str.= "Dégats contre Plante : dégats x<b>".$this->getPlante()."</b><br>";
        $str.= "Dégats contre Lumière : dégats x<b>".$this->getLumiere()."</b><br>";
        $str.= "Dégats contre Ténèbres : dégats x<b>".$this->getTenebres()."</b><br></p>";
        return $str;
    }
    

    public function getNom(){
        return $this->_nom;
    }
    public function getFeu(){
        return $this->_feu;
    }
    public function getTerre(){
        return $this->_terre;
    }
    public function getMetal(){
        return $this->_metal;
    }
    public function getEau(){
        return $this->_eau;
    }
    public function getPlante(){
        return $this->_plante;
    }
    public function getLumiere(){
        return $this->_lumiere;
    }
    public function getTenebres(){
        return $this->_tenebres;
    }

}
