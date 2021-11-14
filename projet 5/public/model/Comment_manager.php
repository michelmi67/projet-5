<?php
require_once("model/Manager.php"); 

class Comment_Manager extends Manager
{
    public function insert_comment($id,$auteur,$message,$signaler)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO commentaire (id_page,auteur,message,signaler) VALUES(?,?,?,?)');
        $req->execute(array($id,$auteur,$message,$signaler));
    }
    
    public function recup_comments($id){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id,auteur,message,DATE_FORMAT(date_creation,"%d/%m/%Y") AS date_creation_fr FROM commentaire WHERE id_page = ?');
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
}