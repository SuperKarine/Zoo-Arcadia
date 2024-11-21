<?php

class Animal 
{
    public $nom;
    public $race;
    public $habitat;
    public $age;
    public $etat;
    public $nourriture;
    public $image;
    public $dateConsultation;
    public $heureConsultation;

    public function __construct($nom, $race,$habitat, $age, $etat, $nourriture, $image, $dateConsultation, $heureConsultation) { 
        $this->nom = $nom;
        $this->race = $race;
        $this->habitat = $habitat;
        $this->age = $age;
        $this->etat = $etat;
        $this->nourriture = $nourriture;
        $this->image = $image;
        $this->dateConsultation = $dateConsultation;
        $this->heureConsultation = $heureConsultation;
    }

    public function manger()
    
    {
     echo 'Animal mange<br>';   
    }
    public function boire()
    {
        echo 'Animal boit<br>';
    }


}
?>