<?php

class Element{
    private $_feu;
    private $_terre;
    private $_metal;
    private $_eau;
    private $_plante;

    private $_lumiere;
    private $_tenebres;

    private function __construct($f, $t, $m, $e, $p, $lum, $ten){
        $this->_feu = $f;
        $this->_terre = $t;
        $this->_metal = $m;
        $this->_eau = $e;
        $this->_plante = $p;

        $this->_lumiere = $lum;
        $this->_tenebres = $ten;
    }




    // LORSQUE LA VALEUR EST NEGATIVE, L'EQUIPEMENT FAIT MOINS DE DEGATS
    // EX : LE FEU RESISTE A LUI MEME ET DONC L'ATTAQUE FAIT 20% DE DEGATS
    // EN MOINS
    public function feu(){
        $varElem = new Element(-20, 10, -20, 20, -10, 0, 0);
        return $varElem;
    }
    public function terre(){
        $varElem = new Element(-10, -20, 10, -20, 20, 0, 0);
        return $varElem;
    }
    public function metal(){
        $varElem = new Element(20, -10, -20, 10, -20,  0, 0);
        return $varElem;
    }
    public function eau(){
        $varElem = new Element(-20, 20, -10, -20, 10, 0, 0);
        return $varElem;
    }
    public function plante(){
        $varElem = new Element(10, -20, 20, -10, -20,  0, 0);
        return $varElem;
    }



    public function lumiere(){
        $varElem = new Element(10, 10, 10, 10, 10, -100, 20);
        return $varElem;
    }
    public function tenebres(){
        $varElem = new Element(10, 10, 10, 10, 10, 20, -100);
        return $varElem;
    }
    
}
