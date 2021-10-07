<?php
require('controller/controller.php');

if (isset($_GET['action'])) 
{
    //URL = monsite.fr?action=accueil
    if ($_GET['action'] == 'accueil') 
    {
        accueil();
    }
    //URL = monsite.fr?action=index_article
    elseif ($_GET['action'] == 'index_article') 
    {
        index_articles();
    }
    //URL = monsite.fr?action=artcile&texte=$id
    elseif($_GET['action'] == 'article') 
    {
        $id = $_GET['texte'];
        article($id);
    }
    elseif($_GET['action'] == 'creer_billet')
    {
        $titre = null;
        $texte = null;
        if(isset($_POST['titre']))
        {

            $titre = $_POST['titre'];
            $texte = $_POST['texte'];
        }
        creer_billet($titre,$texte);
        
    }
    elseif($_GET['action'] == 'recup_article')
    {
        recup_article_admin();
    }
    elseif($_GET['action'] == 'modif_article')
    {
        $id = $_GET['texte'];
        modif_article($id);
    }
    elseif($_GET['action'] == 'suprime_article')
    {   
        $id = $_GET['texte'];
        suprime_article($id);
    }
    elseif($_GET['action'] == 'recup_commentaire')
    {
        recup_commentaire_admin();
    }
    elseif($_GET['action'] == 'moderer_commentaire')
    {   
        $id = $_GET['commentaire'];
        moderer_commentaire($id);
    }
    elseif($_GET['action'] == 'suprime_commentaire')
    {
        $id = $_GET['commentaire'];
        suprime_commentaire($id);
    }
    elseif($_GET['action'] == 'signaler')
    {
        $id = $_GET['commentaire'];
        signaler($id);
    }
    elseif($_GET['action'] == 'deconnexion')
    {
        deconnexion();
    }
    elseif($_GET['action'] == 'connexion')
    {
        $email_connexion = null;
        $pass_connexion = null;
        if(isset($_POST['email_connexion']))
        {
            $email_connexion = $_POST['email_connexion'];
            $pass_connexion = $_POST['pass_connexion'];
        }
        connexion($email_connexion,$pass_connexion);
    }
    
}    
else {
    accueil();
}