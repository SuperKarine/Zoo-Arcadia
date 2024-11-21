<?php

class Habitats
{
    public $nom;
    public $descriptionHabitat;
    public $nomHabitat;
    public $etat;
    public $animaux;
    public $image;
    

    public function __construct($nom, $descriptionHabitat, $nomHabitat, $etat, $animaux, $image) { 
        $this->nom = $nom;
        $this->descriptionHabitat = $descriptionHabitat;
        $this->nomHabitat = $nomHabitat;
        $this->etat = $etat;
        $this->animaux = $animaux;
        $this->image = $image;
    
    }

    public function manger()
    
    {
     echo 'Animal mange<br>';   
    }
    public function boire()
    {
        echo 'Animal boit<br>';
    }

    public function dormir()
    {
        echo 'Animal dort<br>';
    }


}
?>