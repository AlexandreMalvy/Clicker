<?php

class Metal extends Element{


    public function __construct(){
        $this->_nom = "Métal";
        $this->_feu = 0.5;
        $this->_terre = 1.5;
        $this->_metal = 0.5;
        $this->_eau = 0.66;
        $this->_plante = 2;
        $this->_lumiere = 1;
        $this->_tenebres = 1;
    }

}