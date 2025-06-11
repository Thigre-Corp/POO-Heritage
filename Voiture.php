<?php

class Voiture{
    //--attributs:
    protected string $_marque ="";
    protected string $_modele ="";
    protected int $_vhIndex = 0;
    private static int $_vhNum =0;

    //--contrstructeur
    public function __construct(string $marque, string $modele){
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_vhIndex = ++self::$_vhNum;
    }

    //--toString
    public function __toString(){
        return $this->_marque." ".$this->_modele."<br>";
    }
    //--setter
    public function setMarque(string $marque ="") : string {
        return $this->_marque = $marque;
    }
    public function setModele(string $modele) : string {
        return $this->_modele = $modele;
    }
    //---getter
    public function getMarque() : string{
        return $this->_marque;
    }
    public function getModele() : string {
        return $this->_modele;
    }
    public function vhIndex() : int {
        return $this->_vhNum;
    }
    //--méthodes
    public function getInfo()  : string {
        return 
        "<br>Infos véhicule ".$this->_vhIndex."<br>
        **********************<br>
        Nom et modèle du véhicule : ".$this->_marque." ".$this->_modele."<br>";
    }
}

final class Ev extends Voiture{
    //attributs
    private  int $_autonomie = 0;

    //fonction magiques
    public function __construct(string $marque ="nada", string $modele = "rien", int $autonomie = 0){
        parent::__construct( $marque , $modele );
        $this->_autonomie = $autonomie;
    }
    //--toString
    public function __toString(){
        return $this->_marque." ".$this->_modele." ".$this->_autonomie." km<br>";
    }
    //--méthodes
    public function getInfo()  : string {
        return parent::getInfo()."Autonomie : ".$this->_autonomie."<br>";
    }
}