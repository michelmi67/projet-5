<?php
require_once("model/Manager.php"); 

class Comment_Manager extends Manager
{
    public function insert_comment($id,$auteur,$message,$signaler)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO commentaire (id_page,auteur,message,signaler) VALUES(?,?,?,?');
        $req->execute(array($id,$auteur,$message,$signaler));
    } 
}