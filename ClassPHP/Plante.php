<?php

class Plante extends Element{


    public function __construct(){
        $this->_nom = "Plante";
        $this->_feu = 0.66;
        $this->_terre = 2;
        $this->_metal = 0.5;
        $this->_eau = 1.5;
        $this->_plante = 0.5;
        $this->_lumiere = 1;
        $this->_tenebres = 1;
    }

}