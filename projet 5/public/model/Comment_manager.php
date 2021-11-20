<?php
require_once("model/Manager.php"); 

class Comment_Manager extends Manager
{
    public function insert_comment($id,$utilisateur,$auteur,$message,$signaler)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO commentaire (id_page,id_utilisateur,auteur,message,signaler) VALUES(?,?,?,?,?)');
        $req->execute(array($id,$utilisateur,$auteur,$message,$signaler));
    }
    
    public function recup_comments($id){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id,id_page,id_utilisateur,auteur,message,DATE_FORMAT(date_creation,"%d/%m/%Y") AS date_creation_fr FROM commentaire WHERE id_page = ? ORDER BY id DESC');
        $req->execute(array($id));
        $commentaires = [];
        while($row = $req->fetch())
        {
            $commentaires[] = $row;
        }
        return $commentaires;
    }

    public function signaler_commentaire($signaler,$id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE commentaire SET signaler = ? WHERE id = ?');
        $req->execute(array($signaler,$id));
    }

    public function recup_comments_signales($signaler)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id,id_page,id_utilisateur,auteur,message,signaler,DATE_FORMAT(date_creation,"%d/%m/%Y") AS date_creation_fr FROM commentaire WHERE signaler = ?');
        $req->execute(array($signaler));
        $commentaires_signales = [];
        while($row = $req->fetch())
        {
            $commentaires_signales[] = $row;
        }
        return $commentaires_signales;
    }

    public function recup_comments_non_signales($signaler)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id,id_page,id_utilisateur,auteur,message,signaler,DATE_FORMAT(date_creation,"%d/%m/%Y") AS date_creation_fr FROM commentaire WHERE signaler = ?');
        $req->execute(array($signaler));
        $commentaires = [];
        while($row = $req->fetch())
        {
            $commentaires[] = $row;
        }
        return $commentaires;
    }

    public function delete_comment($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM commentaire WHERE id = ?');
        $req->execute(array($id));
    }

    public function moderer($signaler,$id){
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE commentaire SET signaler = ? WHERE id = ?');
        $req->execute(array($signaler,$id));
    }

    public function recup_comments_article($id_page)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id_page FROM commentaire WHERE id_page = ?');
        $$req->exectute(array($id_page));
        $commentaires = [];
        while($row = $req-fetch())
        {
            $commentaires[] = $row;
        }
        return $commentaires;
    }

    public function delete_all_comments($id_page)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE from commentaire WHERE id_page = ?');
        $req->execute(array($id_page));
    }
}