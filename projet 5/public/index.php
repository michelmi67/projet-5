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
}
else
{
 
 $controller->accueil();
}