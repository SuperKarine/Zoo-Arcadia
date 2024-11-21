<?php

class Visiteurs
{
    private $_nomVisiteur;
    private $_prenomVisiteur;
    private $_mailVisiteur;
    
    private function __construct($_nomVisiteur,$_prenomVisiteur, $_mailVisiteur) { 
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_username = $_username;
        $this->_password = $_password;
        $this->_mail = $_mail;
        $this->_statutConnexion = $_statutConnexion;
        $this->_role = $_role;
    
    }

    private function s\'inscrire()
    
    {
     echo 'Vous êtes inscrit<br>';   
    }

    private function visiterHabitat()
    
    {
     echo 'Vous visitez<br>';   
    }
    
}
?>