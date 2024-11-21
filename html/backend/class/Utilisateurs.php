<?php

class Utilisateurs
{
    private $_nom;
    private $_prenom;
    private $_username;
    private $_password;
    private $_mail;
    private $_statutConnexion;
    private $_role;

    private function __construct($_nom,$_prenom, $_username, $_password, $_mail, $_statutConnexion, $_role) { 
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_username = $_username;
        $this->_password = $_password;
        $this->_mail = $_mail;
        $this->_statutConnexion = $_statutConnexion;
        $this->_role = $_role;
    
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