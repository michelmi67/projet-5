<?php

//Conection à la base de donnée
function db_connect()
{
     try
     {
         $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root',''); 
     }
     catch(Exeption $e)
     {
         die('Erreur :' . $e->getMessage());
     }
}


function recup_3_derniers_articles()
{
    $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root',''); 
    $req = $db->query('SELECT id,titre,texte FROM (SELECT id,titre,texte, DATE_FORMAT(date_creation,\' %d/%m/%Y \') FROM article ORDER BY id DESC LIMIT 0,3 ) AS date_creation_fr ORDER BY id ASC');
    $articles = [];
    while($row = $req->fetch())
    {
        $articles[] = $row;   
    }
    $req->CloseCursor();
    return $articles;
    
}

function recup_all_articles()
{
    $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root',''); 
    $req = $db->query('SELECT id,titre,texte,DATE_FORMAT(date_creation,\' %d/%m/%Y \') AS date_creation_fr FROM article ORDER BY id  ');
    $all_articles = [];
    while($row = $req->fetch())
    {
        $all_articles[] = $row;
    }
    $req->CloseCursor();
    return $all_articles;
}

function recup_article($id)
{
    $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root',''); 
    $req = $db->prepare('SELECT id,titre,texte FROM article  WHERE id = ?');
    $req->execute(array($id));
    $article = $req->fetch();
    $req->CloseCursor();
    return $article;
}

function recup_commentaires($id)
{
    $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root',''); 
    $req = $db->prepare('SELECT id,auteur,message,moderer,DATE_FORMAT(date_creation,\'%d/%m/%Y\') AS date_creation_fr FROM commentaire  WHERE id_page = ? ORDER BY id DESC');
    $req->execute(array($id));
    $all_commentaires = [];
    while($row = $req->fetch())
    {
        $all_commentaires[] = $row;
    }
    $req->CloseCursor();
    return $all_commentaires;
}

function envoi_commentaire()
{
    if($_POST)
    {
        $signaler = "false";
        $moderer = "false";  
        $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root','');
        $req = $db->prepare('INSERT INTO commentaire (id_page,auteur,message,signaler,moderer) VALUES (?,?,?,?,?)');
        $req->execute(array($_GET['texte'],$_POST['pseudo'],$_POST['commentaire'],$signaler,$moderer));
        $req->CloseCursor();
    }
}
function recup_id_tableau()
{
    $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root','');
    $req = $db->query('SELECT id FROM article'); 
    $tableau_ids = array();
    while ($id_tableau = $req->fetch()) 
    { 
        $tableau_ids[] = (int)$id_tableau['id'];                  
    } 
    return $tableau_ids;
}

function creation_billet($titre,$texte) 
{
    if($_POST)
            {
                
                $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root','');
                $req = $db->prepare('INSERT INTO article (titre,texte) VALUES (?,?)');
                $req->execute(array($titre,$texte));
                var_dump($titre);
                var_dump($texte);
            }
}

function recup_all_commentaire_signaler() 
{
    $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root','');
    $all_commentaire_signaler = $db->query('SELECT id,id_page,auteur,message,signaler,moderer,DATE_FORMAT(date_creation,\' %d/%m/%Y à %Hh/%imin/%ss \') AS date_creation_fr FROM commentaire  WHERE signaler = \'true\'
     ORDER BY date_creation');
     return $all_commentaire_signaler;
    
}

function recup_all_commentaire()
{
    $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root','');
    $all_commentaire = $db->query('SELECT id,id_page,auteur,message,signaler,moderer,DATE_FORMAT(date_creation,\' %d/%m/%Y à %Hh/%imin/%ss \') AS date_creation_fr FROM commentaire 
    ORDER BY date_creation ');
    return $all_commentaire;
}

function recup_titre($id)
{
    $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root','');
    $req = $db->prepare('SELECT id,titre FROM article where id = ?');
    $req->execute(array($id));
    $recup_modif_titre = $req->fetch();
    return $recup_modif_titre;
    
}

function recup_texte($id)
{
    $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root','');
    $req = $db->prepare('SELECT id,texte FROM article WHERE id = ?');
    $req->execute(array($id));
    $recup_modif_texte = $req->fetch();
    return $recup_modif_texte;
    
}

function modif_titre($id,$modifier_titre)
{
    
    $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root','');
    $modifier_titre = $_POST['modif_titre'];
    $titre_modifier = $db->prepare('UPDATE article SET titre = ? WHERE id = ?');
    $titre_modifier->execute(array($modifier_titre,$id));                   
}

function modif_texte($id,$modifier_texte)
{
    
    $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root','');
    $modifier_titre = $_POST['modif_titre'];
    $titre_modifier = $db->prepare('UPDATE article SET texte = ? WHERE id = ?');
    $titre_modifier->execute(array($modifier_texte,$id));                   
}

function delete_article($id)
{
    $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root','');
    $req = $db->prepare('DELETE  FROM article WHERE id = ?');
    $req->execute(array($id));
    header('Location:?action=recup_article');
}

function moderation_commentaire($id)
{
    $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root','');
    $signaler = "false";
    $moderer = "true";
    $id = $_GET['commentaire'];
    $req = $db->prepare('UPDATE commentaire SET signaler = ?, moderer = ? WHERE id = ?');
    $req->execute(array($signaler,$moderer,$id));
    header('Location:?action=recup_commentaire');
}

function delete_commentaire($id)
{
    $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root','');
    $req = $db->prepare('DELETE  FROM commentaire WHERE id = ?');
    $req->execute(array($id));
    header('Location:?action=recup_commentaire');
}

function signaler_commentaire($id)
{
    $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root','');
    $signaler = "true";
    $req = $db->prepare('UPDATE commentaire SET signaler = ? WHERE id = ? ');
    $req->execute(array($signaler,$id));
    header('Location: ' . $_SERVER['HTTP_REFERER']); 
}

function deconnexion_admin()
{   
    session_start();
    $_SESSION = array();
    session_destroy();
    header('Location:?action=accueil');
}

function connexion_admin($email_connexion,$pass_connexion)
{
    $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root','');
    //on récupère l'adresse email de l'admin
    $email_connexion = htmlspecialchars($_POST['email_connexion']);
    $req = $db->prepare('SELECT id,nom,prenom,email,pass FROM admin WHERE email = ?');
    $req->execute(array($email_connexion));
    $email = $req->fetch();
    //recupération du mot de passe
    $pass_connexion = htmlspecialchars($_POST['pass_connexion']);
    $pass_correct = password_verify($pass_connexion,$email['pass']);
    //si l'adresse email n'éxiste pas
    if(!$email)
    {
        echo 'mauvais identifiant ou mot de passe !';
        
    }
    else
    {
        //Si le mot de passe est correct on fait la connexion
        if($pass_correct)
        {
            
            $_SESSION['id'] = $email['id'];  
            $_SESSION['nom'] = $email['nom'];
            $_SESSION['prenom'] = $email['prenom'];
            $_SESSION['email'] = $email['email'];
            header('Location:?action=accueil');     
        }
        else
        {
            echo 'mauvais identifiant ou mot de passe !';
        }
    }    
}

function enregistrement()
{
    $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root','');
    if($_POST){
        //Instanciation des variables
        $nom = htmlspecialchars($_POST['nom']) ;
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $mdp = htmlspecialchars($_POST['pass']);
        $mdp_verification = htmlspecialchars($_POST['pass_verification']);

        //Si les deux mots de passe renseignés sont les mêmes
        if($mdp === $mdp_verification)
        {
            //on hache le mot de passe
            $mdp_hache = password_hash($mdp, PASSWORD_DEFAULT);

            //Puis on créer un nouveau admin
            $req = $db->prepare('INSERT INTO admin (nom,prenom,email,pass) VALUES (?,?,?,?)');
            $req->execute(array($nom,$prenom,$email,$mdp_hache));
            header('Location:?action=accueil');
        }
        else
        {
            echo 'Les mots de passe ne sont pas identiques';
        }
        
    }
}


