<?php
require_once("model/Manager.php"); 

class UserManager extends Manager
{
    public function connexion_admin($email_connexion,$pass_connexion)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id,nom,prenom,email,pass FROM admin WHERE email = ?');
        $req->execute(array($email_connexion));
        $email = $req->fetch();
        return $email;
    }

    public function enregistrement($nom,$prenom,$email,$mdp_hache)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO admin (nom,prenom,email,pass) VALUES (?,?,?,?)');
        $req->execute(array($nom,$prenom,$email,$mdp_hache));
        
    }
}