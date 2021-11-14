<?php
require_once("model/Manager.php"); 

class User_Manager extends Manager
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

    public function recup_utilisateur()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id,nom,prenom,DATE_FORMAT(date_naissance,"%d/%m/%Y") AS date_naissance_fr,pseudo,email,rang,
        DATE_FORMAT(date_creation,"%d/%m/%Y") AS date_creation_fr FROM utilisateur');
        $utilisateurs = [];
        while($row = $req->fetch())
        {
            $utilisateurs[] = $row;
        }
        $req->CloseCursor();
        return $utilisateurs;
    }

    public function rang($rang,$pseudo)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE utilisateur SET rang = ? WHERE pseudo = ?');
        $req->execute(array($rang,$pseudo));
    }

    public function delete_user($pseudo)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM utilisateur WHERE pseudo = ?');
        $req->execute(array($pseudo));
    }
}