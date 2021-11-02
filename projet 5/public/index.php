<?php
require('controller/controller.php');

$controller = new Controller; 

if(isset($_GET['action']))
{
    if ($_GET['action'] == 'accueil') 
    {
        $controller->accueil();
    }
    elseif($_GET['action'] == 'inscription')
    {
        $controller->inscription();
    }
    elseif($_GET['action'] == 'connexion')
    {
        $controller->connexion();
    }
    elseif($_GET['action'] == 'deconnexion')
    {
        $controller->deconnexion();
    }
    elseif($_GET['action'] == 'profil')
    {
        $controller->profil();
    }
}
else
{
 
 $controller->accueil();
}