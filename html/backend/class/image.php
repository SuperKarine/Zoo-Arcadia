<?php

class image
{
    public $nomImage;
    public $cheminImage;
    public $tailleImage;
    
    

    public function __construct($nomImage,$cheminImage, $tailleImage) { 
        $this->nomImage = $nomImage;
        $this->cheminImage = $cheminImage;
        $this->tailleImage = $tailleImage;
        
    }

    public function afficherImage()
    
    {
     echo 'J'affiche l\'image<br>';   
    }
    
}
?>