<?php
require_once("model/Manager.php"); 

class UserManager extends Manager
{
    public function connexion($pseudo_connexion,$pass_connexion)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id,pseudo,pass,rang FROM utilisateur WHERE pseudo = ?');
        $req->execute(array($pseudo_connexion));
        $pseudo = $req->fetch();
        return $pseudo;
    }

    public function enregistrement($nom,$prenom,$date_naissance,$pseudo,$email,$mdp_hache,$rang)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO utilisateur (nom,prenom,date_naissance,pseudo,email,pass,rang) VALUES (?,?,?,?,?,?,?)');
        $req->execute(array($nom,$prenom,$date_naissance,$pseudo,$email,$mdp_hache,$rang));
        
    }
}