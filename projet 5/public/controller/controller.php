<?php

class Controller
{

    public function accueil()
    {
        require('views/accueil.php');
    }

    public function connexion(){
        require('views/connexion.php');
    }
}