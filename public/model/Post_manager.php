<?php
require_once("model/Manager.php"); 

class Post_Manager extends Manager
{
    public function envoi_post($utilisateur,$pseudo,$message,$signaler)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO article (id_utilisateur,pseudo,message,signaler) VALUES (?,?,?,?)');
        $req->execute(array($utilisateur,$pseudo,$message,$signaler));
    }

    public function recup_posts($debut,$nb_elements_par_page)
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id,pseudo,message,signaler,DATE_FORMAT(date_creation,"%d/%m/%Y") AS date_creation_fr FROM article ORDER BY date_creation DESC LIMIT '.$debut.','.$nb_elements_par_page);
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
        $req = $db->prepare('SELECT id,pseudo,message,signaler,DATE_FORMAT(date_creation,"%d/%m/%Y") AS date_creation_fr FROM article WHERE pseudo = ? ORDER BY date_creation DESC');
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

    public function recup_all_posts_signales($signaler)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id,pseudo,message,signaler,DATE_FORMAT(date_creation,"%d/%m/%Y") AS date_creation_fr FROM article WHERE signaler = ? ORDER BY date_creation DESC');
        $req->execute(array($signaler));
        $articles_signales = [];
        while($row = $req->fetch())
        {
            $articles_signales[] = $row;
        }
        $req->CloseCursor();
        return $articles_signales;
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

    public function moderer($signaler,$id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE article SET signaler = ? WHERE id = ?');
        $req->execute(array($signaler,$id));
    }

    public function compte_articles()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT COUNT(id) AS cpt FROM article');
        $nb_articles = $req->fetch();
        return $nb_articles;
    }

}