<?php

class Element{
    private $_nom;
    private $_feu;
    private $_terre;
    private $_metal;
    private $_eau;
    private $_plante;

    private $_lumiere;
    private $_tenebres;

    public function __construct($nom, $f, $t, $m, $e, $p, $lum, $ten){
        $this->_nom = $nom;
        $this->_feu = $f;
        $this->_terre = $t;
        $this->_metal = $m;
        $this->_eau = $e;
        $this->_plante = $p;

        $this->_lumiere = $lum;
        $this->_tenebres = $ten;
    }


    public function afficherDgt(){
        $str = "<p>Element ".$this->getNom()."<br>";
        $str.= "Dégats contre Feu : ".$this->getFeu()."%<br></p>";
        $str.= "Dégats contre Terre : ".$this->getTerre()."%<br></p>";
        $str.= "Dégats contre Métal : ".$this->getMetal()."%<br></p>";
        $str.= "Dégats contre Eau : ".$this->getEau()."%<br></p>";
        $str.= "Dégats contre Plante : ".$this->getPlante()."%<br></p>";
        $str.= "Dégats contre Lumière : ".$this->getLumiere()."%<br></p>";
        $str.= "Dégats contre Ténèbres : ".$this->getTenebres()."%<br></p>";

        return $str;
    }
    

    public function getNom(){
        return $this->_nom;
    }

    public function getFeu(){
        return $this->_feu;
    }
    public function getTerre()
    {
        return $this->_terre;
    }

    public function getMetal()
    {
        return $this->_metal;
    }

    public function getEau()
    {
        return $this->_eau;
    }

    public function getPlante()
    {
        return $this->_plante;
    }

    public function getLumiere()
    {
        return $this->_lumiere;
    }

    public function getTenebres()
    {
        return $this->_tenebres;
    }


/*     function feu(){
        $varElem = new Element("Feu", -20, 10, -20, 20, -10, 0, 0);
        return $varElem;
    }
    function terre(){
        $varElem = new Element("Terre", -10, -20, 10, -20, 20, 0, 0);
        return $varElem;
    }
    function metal(){
        $varElem = new Element("Métal", 20, -10, -20, 10, -20,  0, 0);
        return $varElem;
    }
    function eau(){
        $varElem = new Element("Eau", -20, 20, -10, -20, 10, 0, 0);
        return $varElem;
    }
    function plante(){
        $varElem = new Element("Plante", 10, -20, 20, -10, -20,  0, 0);
        return $varElem;
    }
    function lumiere(){
        $varElem = new Element("Lumière", 10, 10, 10, 10, 10, -100, 20);
        return $varElem;
    }
    function tenebres(){
        $varElem = new Element("Ténèbres", 10, 10, 10, 10, 10, 20, -100);
        return $varElem;
    } */


}
