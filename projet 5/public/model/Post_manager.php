<?php
require_once("model/Manager.php"); 

class Post_Manager extends Manager
{
    public function envoi_post($pseudo,$message,$signaler)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO article (pseudo,message,signaler) VALUES (?,?,?)');
        $req->execute(array($pseudo,$message,$signaler));
    }

    public function recup_posts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id,pseudo,message,signaler,DATE_FORMAT(date_creation,"%d/%m/%Y") AS date_creation_fr FROM article ORDER BY date_creation DESC');
        $articles = [];
        while($row = $req->fetch())
        {
            $articles[] = $row;   
        }
        $req->CloseCursor();
        return $articles;
    }

    public function recup_posts_profil($pseudo)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT pseudo,message,signaler,DATE_FORMAT(date_creation,"%d/%m/%Y") AS date_creation_fr FROM article WHERE pseudo = ? ORDER BY date_creation DESC');
        $req->execute(array($pseudo));
        $articles_profil = [];
        while($row = $req->fetch())
        {
            $articles_profil[] = $row;
        }
        $req->CloseCursor();
        return $articles_profil;
    }

    public function recup_post($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id,pseudo,message,DATE_FORMAT(date_creation,"%d/%m/%Y") AS date_creation_fr FROM article WHERE id = ? ORDER BY date_creation DESC');
        $req->execute(array($id));
        $article = $req->fetch();
        return $article; 
    }

    public function recup_all_posts($signaler)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id,pseudo,message,signaler,DATE_FORMAT(date_creation,"%d/%m/%Y") AS date_creation_fr FROM article WHERE signaler = ? ORDER BY date_creation DESC');
        $req->execute(array($signaler));
        $articles_profil = [];
        while($row = $req->fetch())
        {
            $articles[] = $row;
        }
        $req->CloseCursor();
        return $articles;
    }

    public function recup_all_posts_signalés($signaler)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id,pseudo,message,signaler,DATE_FORMAT(date_creation,"%d/%m/%Y") AS date_creation_fr FROM article WHERE signaler = ? ORDER BY date_creation DESC');
        $req->execute(array($signaler));
        $articles_signalés = [];
        while($row = $req->fetch())
        {
            $articles_signalés[] = $row;
        }
        $req->CloseCursor();
        return $articles_signalés;
    }

    public function delete_article($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM article WHERE id = ?');
        $req->execute(array($id));
    }
    public function signaler_article_utilisateur($signaler,$id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE article SET signaler = ? WHERE id = ?');
        $req->execute(array($signaler,$id));
    }

}