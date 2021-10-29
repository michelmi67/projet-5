<?php
require('controller/controller.php');

$controller = new Controller; 

if(isset($_GET['action']))
{

}
else
{
 
 $controller->accueil();
}