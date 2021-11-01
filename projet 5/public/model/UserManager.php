<?php
require_once("model/Manager.php"); 

class UserManager extends Manager
{
    public function connexion_enfant($email_connexion,$pass_connexion)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id,nom,prenom,email,pass FROM admin WHERE email = ?');
        $req->execute(array($email_connexion));
        $email = $req->fetch();
        return $email;
    }

    public function enregistrement($nom,$prenom,$date_naissance,$pseudo,$email,$mdp_hache)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO enfant (nom_enfant,prenom_enfant,date_naissance_enfant,pseudo_enfant,email_parent,pass_enfant) VALUES (?,?,?,?,?,?)');
        $req->execute(array($nom,$prenom,$date_naissance,$pseudo,$email,$mdp_hache));
        
    }
}