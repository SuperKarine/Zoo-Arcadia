<?php

class Administrateur
{
    private $_nom;
    private $_prenom;
    private $_username;
    private $_password;
    private $_mail;
    private $_role;
    private $_voirEtatHabitat;
    private $_voirEtatAnimal;
    private $_voirAvis;
    private $_statutConnexion;
    

    private function __construct($_nom,$_prenom, $_username, $_password, $_mail, $_role, $_voirEtatHabitat, $_voirEtatAnimal, $_voirAvis, $_statutConnexion, ) { 
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_username = $_username;
        $this->_password = $_password;
        $this->_mail = $_mail;
        $this->_role = $_role;
        $this->_voirEtatHabitat = $_voirEtatHabitat;
        $this->_voirEtatAnimal = $_voirEtatAnimal;
        $this->_voirEtatAnimal = $_voirEtatAnimal;
        $this->$_voirAvis = $_voirAvis;
        $this->_statutConnexion = $_statutConnexion;
        
    
    }

    private function seConnecter()
    
    {
     echo 'Vous êtes connecté<br>';   
    }
    
    private function seDeconnecter()
    
    {
     echo 'Vous êtes déconnecté<br>';   
    }
}
?>