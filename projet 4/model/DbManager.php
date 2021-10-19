<?php
class DbManager
{
    protected function dbConnect()
    {
        try
        {
            $db = new PDO('mysql:host=db5005368488.hosting-data.io;dbname=dbs4503584;charset=utf8','dbu1174469','Openclassrooms0123&'); 
        }
        catch(Exeption $e)
        {
            die('Erreur :' . $e->getMessage());
        }
        return $db;
    }
}