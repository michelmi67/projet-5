<?php
require_once('config.php');
require_once('controller/controller.php');


$controller = new Controller;

if(isset($_GET['action'])):
    switch ($_GET['action']):
    case 'bienvenu': 
        $controller->bienvenu();
        break;
    case 'accueil': 
        $controller->accueil();
        break;
    case 'inscription':
        $controller->inscription();
        break;
    case 'connexion':
        $controller->connexion();
        break;
    case 'deconnexion':
        $controller->deconnexion();
        break;
    case 'profil':
        $controller->profil();    
        break;
    case 'utilisateur':
        $controller->utilisateur();    
        break;
    case 'video':
        $controller->video();
        break;
    case 'dessin':
        $controller->dessin();
        break;
    case 'article':
        $controller->article();
        break;
    case 'creer_admin':
        $controller->creer_admin();
        break;
    case 'creer_moderateur':
        $controller->creer_moderateur();
        break;
    case 'creer_utilisateur':
        $controller->creer_utilisateur();
        break;
    case 'suprime_utilisateur':
        $controller->suprime_utilisateur();
        break;
    case 'messages':
        $controller->messages();
        break;
    case 'signal_comment':
        $controller->signal_comment();
        break;
    case 'suprime_article':
        $controller->suprime_article();
        break;
    case 'signal_article_user':
        $controller->signal_article_user();
        break;
    case 'moderer_article':
        $controller->moderer_article();
        break;
    case 'commentaire':
        $controller->commentaire();
        break;
    case 'suprime_comment':
        $controller->suprime_comment();
        break;
    case 'moderer_comment':
        $controller->moderer_comment();
        break;
    case 'jeux':
        $controller->jeux();
        break;
    endswitch;
else:
    $controller->bienvenu();
endif;