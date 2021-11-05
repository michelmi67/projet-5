<?php
require_once("model/Manager.php"); 

class Post_Manager extends Manager
{
    public function envoi_post($pseudo,$message)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO article (pseudo,message) VALUES (?,?)');
        $req->execute(array($pseudo,$message));
    }

    public function recup_post()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT pseudo,message,DATE_FORMAT(date_creation,"%d/%m/%Y") AS date_creation_fr FROM article ORDER BY date_creation DESC');
        $articles = [];
        while($row = $req->fetch())
        {
            $articles[] = $row;   
        }
        $req->CloseCursor();
        return $articles;
    }

    public function recup_post_profil($pseudo)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT pseudo,message,DATE_FORMAT(date_creation,"%d/%m/%Y") AS date_creation_fr FROM article WHERE pseudo = ? ORDER BY date_creation DESC');
        $req->execute(array($pseudo));
        $articles = [];
        while($row = $req->fetch())
        {
            $articles[] = $row;
        }
        $req->CloseCursor();
        return $articles;
    }
}