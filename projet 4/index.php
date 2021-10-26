<?php
require('controller/controller.php');

if (isset($_GET['action'])) 
{
    if ($_GET['action'] == 'accueil') 
    {
        accueil();
    }
    elseif ($_GET['action'] == 'index_article') 
    {
        index_articles();
    }
    elseif($_GET['action'] == 'article') 
    {
        article();
    }
    elseif($_GET['action'] == 'creer_billet')
    {
        creer_billet();   
    }
    elseif($_GET['action'] == 'recup_article')
    {
        recup_article_admin();
    }
    elseif($_GET['action'] == 'modif_article')
    {
        modif_article();
    }
    elseif($_GET['action'] == 'suprime_article')
    {   
        suprime_article();
    }
    elseif($_GET['action'] == 'recup_commentaire')
    {
        recup_commentaire_admin();
    }
    elseif($_GET['action'] == 'moderer_commentaire')
    {   
        moderer_commentaire();
    }
    elseif($_GET['action'] == 'suprime_commentaire')
    {
        suprime_commentaire();
    }
    elseif($_GET['action'] == 'signaler')
    {
       signaler();
    }
    elseif($_GET['action'] == 'deconnexion')
    {
        deconnexion();
    }
    elseif($_GET['action'] == 'connexion')
    {
        
        connexion();
    }
    elseif($_GET['action'] == 'enregistrement_admin')
    {
        enregistrement_admin();
    }   
}    
else {
    accueil();
}