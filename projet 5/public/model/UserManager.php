<?php
require_once("model/Manager.php"); 

class UserManager extends Manager
{
    public function connexion($pseudo_connexion,$pass_connexion)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT pseudo_enfant,pass_enfant,rang FROM enfant WHERE pseudo_enfant = ?');
        $req->execute(array($pseudo_connexion));
        $pseudo = $req->fetch();
        return $pseudo;
    }

    public function enregistrement($nom,$prenom,$date_naissance,$pseudo,$email,$mdp_hache,$rang)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO enfant (nom_enfant,prenom_enfant,date_naissance_enfant,pseudo_enfant,email_parent,pass_enfant,rang) VALUES (?,?,?,?,?,?,?)');
        $req->execute(array($nom,$prenom,$date_naissance,$pseudo,$email,$mdp_hache,$rang));
        
    }
}