<?php
class Manager
{
    protected function dbConnect()
    {
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=projet_5;charset=utf8','root',''); 
        }
        catch(Exeption $e)
        {
            die('Erreur :' . $e->getMessage());
        }
        return $db;
    }
}