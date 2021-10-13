<?php

require('model/model.php');


function accueil()
{
    $articles = recup_3_derniers_articles();
    require('views/accueil.php');
}

function index_articles()
{
    $all_articles = recup_all_articles();
    require('views/index_article.php');
}

function article($id)
{
    $article = recup_article($id);
    $tableau_ids = recup_id_tableau();
    $commenter = envoi_commentaire();
    $all_commentaires = recup_commentaires($id);
    
    //Récupération des Index dans le tableau ID 
     $index_page_courante = array_search(intval($id), $tableau_ids);
     $index_page_precedente = $index_page_courante-1;
     $index_page_suivante = $index_page_courante+1;
     
     //Récupération des ID des pages en fonction de ces index
     if(array_key_exists($index_page_precedente,$tableau_ids))
     {
         $id_page_precedente = $tableau_ids[$index_page_precedente];
     }
     else
     {
         $id_page_precedente = null;
     }
     if(array_key_exists($index_page_suivante,$tableau_ids))
     {
         $id_page_suivante = $tableau_ids[$index_page_suivante];
     }
     else
     {
         $id_page_suivante = null;
     } 
    
    require('views/article.php');
}

function creer_billet($titre,$texte){
    if($titre != null)
    {

        $billet = creation_billet($titre,$texte);
    }
    require('views/creer_billet.php');
}

function recup_article_admin()
{
    $all_articles = recup_all_articles();
    require('views/recup_article.php');
}

function modif_article($id,$modifier_titre,$modifier_texte)
{
    $recup_modif_titre = recup_titre($id);
    $recup_modif_texte = recup_texte($id);
    if($modifier_titre != null){

        $titre_modifier = modif_titre($id,$modifier_titre);
        $texte_modifier = modif_texte($id,$modifier_texte);
    }
    require('views/modif_article.php'); 
}

function suprime_article($id)
{
    $suprime_article = delete_article($id);
    require('views/recup_article.php'); 
}

function recup_commentaire_admin(){
    $all_commentaire_signaler = recup_all_commentaire_signaler();
    $all_commentaire = recup_all_commentaire();
    require('views/recup_commentaire.php');
}

function moderer_commentaire($id)
{
    $commentaire_moderer = moderation_commentaire($id);
}

function suprime_commentaire($id)
{
    $suprime_commenatire = delete_commentaire($id);
    require('views/recup_commentaire.php');
}

function signaler($id)
{
    $signaler = signaler_commentaire($id);
    require('views/article.php');
}

function deconnexion()
{
    $deconnexion = deconnexion_admin();
    require('views/header.php');
}

function connexion(){
    
    session_start();

    
    $email_connexion = null;
    $pass_connexion = null;
    $message_erreur = null;
    if(isset($_POST['email_connexion']))
    {
        $email_connexion = htmlspecialchars($_POST['email_connexion']);
        $pass_connexion = htmlspecialchars($_POST['pass_connexion']);
    }
    if($email_connexion != null)
    
    {
        $email = connexion_admin($email_connexion,$pass_connexion);
        $pass_correct = password_verify($pass_connexion,$email['pass']);
        //si l'adresse email n'éxiste pas
        if(!$email)
        {
            $message_erreur = 'mauvais identifiant ou mot de passe !';
            
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
                $message_erreur =  'mauvais identifiant ou mot de passe !';
            }
        }    
    }
    require('views/connexion.php');
}

function enregistrement_admin()
{
    $admin = enregistrement();
    require('views/enregistrement_admin.php');
}
