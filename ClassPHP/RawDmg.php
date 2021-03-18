<?php

class RawDmg extends Element{


    public function __construct(){
        $this->_nom = "Aucun";
        $this->_feu = 1;
        $this->_terre = 1;
        $this->_metal = 1;
        $this->_eau = 1;
        $this->_plante = 1;
        $this->_lumiere = 1;
        $this->_tenebres = 1;
    }

}