<?php

class Employes
{
    private $_nom;
    private $_prenom;
    private $_username;
    private $_password;
    private $_mail;
    private $_role;
    private $_nourriture;
    private $_quantiteNourriture;
    private $_animal;
    private $_date;
    private $_heure;
    private $_statutConnexion;
    

    private function __construct($_nom,$_prenom, $_username, $_password, $_mail, $_role, $_nourriture, $_quantiteNourriture, $_animal, $_date, $_heure, $_statutConnexion) { 
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_username = $_username;
        $this->_password = $_password;
        $this->_mail = $_mail;
        $this->_role = $_role;
        $this->_nourriture = $_nourriture;
        $this->_quantiteNourriture = $_quantiteNourriture;
        $this->_animal= $_animal;
        $this->_date= $_date;
        $this->_heure= $_heure;
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

    private function donnerNourriture()
    
    {
     echo 'Cet animal mange<br>';   
    }

    private function quantiteNourriture()
    
    {
     echo 'Cet animal a mange pour une quantite de<br>';   
    }
}
?>