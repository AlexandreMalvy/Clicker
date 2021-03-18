<?php

class Eau extends Element{


    public function __construct(){
        $this->_nom = "Eau";
        $this->_feu = 2;
        $this->_terre = 0.5;
        $this->_metal = 1.5;
        $this->_eau = 0.5;
        $this->_plante = 0.66;
        $this->_lumiere = 1;
        $this->_tenebres = 1;
    }

}