<?php
require('controller/controller.php');

$controller = new Controller;

if(isset($_GET['action'])):
    if ($_GET['action'] == 'bienvenu'): 
        $controller->bienvenu();
    elseif ($_GET['action'] == 'accueil'): 
        $controller->accueil();
    elseif($_GET['action'] == 'inscription'):
        $controller->inscription();
    elseif($_GET['action'] == 'connexion'):
        $controller->connexion();
    elseif($_GET['action'] == 'deconnexion'):
        $controller->deconnexion();
    elseif($_GET['action'] == 'profil'):
        $controller->profil();    
    elseif($_GET['action'] == 'utilisateur'):
        $controller->utilisateur();    
    elseif($_GET['action'] == 'video'):
        $controller->video();
    elseif($_GET['action'] == 'dessin'):
        $controller->dessin();
    elseif($_GET['action'] == 'article'):
        $controller->article();
    elseif($_GET['action'] == 'creer_admin'):
        $controller->creer_admin();
    elseif($_GET['action'] == 'creer_moderateur'):
        $controller->creer_moderateur();
    elseif($_GET['action'] == 'creer_utilisateur'):
        $controller->creer_utilisateur();
    elseif($_GET['action'] == 'suprime_utilisateur'):
        $controller->suprime_utilisateur();
    elseif($_GET['action'] == 'messages'):
        $controller->messages();
    elseif($_GET['action'] == 'signal_comment'):
        $controller->signal_comment();
    elseif($_GET['action'] == 'suprime_article'):
        $controller->suprime_article();
    elseif($_GET['action'] == 'signal_article_user'):
        $controller->signal_article_user();
    elseif($_GET['action'] == 'moderer_article'):
        $controller->moderer_article();
    elseif($_GET['action'] == 'commentaire'):
        $controller->commentaire();
    elseif($_GET['action'] == 'suprime_comment'):
        $controller->suprime_comment();
    elseif($_GET['action'] == 'moderer_comment'):
        $controller->moderer_comment();
    elseif($_GET['action'] == 'jeux'):
        $controller->jeux();
    endif;
else:
    $controller->accueil();
endif;