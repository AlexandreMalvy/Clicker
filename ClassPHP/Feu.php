<?php

class Feu extends Element{


    public function __construct(){
        $this->_nom = "Feu";
        $this->_feu = 0.5;
        $this->_terre = 0.66;
        $this->_metal = 2;
        $this->_eau = 0.5;
        $this->_plante = 1.5;
        $this->_lumiere = 1;
        $this->_tenebres = 1;
    }

}