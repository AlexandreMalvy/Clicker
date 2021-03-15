<?php

class Personnage{
    private $_nom;
    private $_classe;
    private $_level;
    private $_experience;
    private $_image;
    private $_force;
    private $_comptenceUnique;
    private $_arme;
    private $_armure;
    private $_amulette;

    public function __construct(String $nom = "", Classe $classe = new Classe(), String $img, int $force, Competence $competence = new Competence()){
        $this->_nom = $nom;
        $this->_classe = $classe;
        $this->_level = 1;
        $this->_experience = 0;
        $this->_image = $img;
        $this->_force = $force;
        $this->_competenceUnique = $competence;
        $this->_arme = new Equipement();
        $this->_armure = new Equipement();
        $this->_amulette = new Equipement();
    }

    

}
