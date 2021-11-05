<?php
require('controller/controller.php');

$controller = new Controller;

if(isset($_GET['action']))
{
    if ($_GET['action'] == 'bienvenu') 
    {
        $controller->bienvenu();
    }
    elseif ($_GET['action'] == 'accueil') 
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
    elseif($_GET['action'] == 'video')
    {
        $controller->video();
    }
    elseif($_GET['action'] == 'dessin')
    {
        $controller->dessin();
    }

}
else
{
 
 $controller->accueil();
}