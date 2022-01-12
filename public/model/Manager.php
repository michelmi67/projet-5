<?php

require_once('config.php');

class Manager
{
    protected function dbConnect()
    {
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=dbs5022159;charset=utf8',BDD_USER,BDD_PASSWORD); 
        }
        catch(Exeption $e)
        {
            die('Erreur :' . $e->getMessage());
        }
        return $db;
    }
}