<?php
require('controller/controller.php');

$controller = new Controller; 

if(isset($_GET['action']))
{
    if ($_GET['action'] == 'accueil') 
    {
        $controller->accueil();
    }
    elseif($_GET['action'] == 'connexion')
    {
        
        $controller->connexion();
    }
    elseif($_GET['action'] == 'inscription')
    {
        
        $controller->inscription();
    }
}
else
{
 
 $controller->accueil();
}