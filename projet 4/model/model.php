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

function creation_billet($titre,$texte) //
{
    if($_GET)
            {
                $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root','');
                $req = $db->prepare('INSERT INTO article (titre,texte) VALUES (?,?)');
                $req->execute(array($titre,$texte));
                $req->CloseCursor();
            }
}

function recup_all_commentaire_signaler() //
{
    $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root','');
    $all_commentaire_signaler = $db->query('SELECT id,id_page,auteur,message,signaler,moderer,DATE_FORMAT(date_creation,\' %d/%m/%Y \') AS date_creation_fr FROM commentaire  WHERE signaler = \'true\'
     ORDER BY date_creation');
     return $all_commentaire_signaler;
    
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

