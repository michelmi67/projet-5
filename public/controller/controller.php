<?php
require_once('model/Manager.php');
require_once('model/User_manager.php');
require_once('model/Post_manager.php');
require_once('model/Comment_manager.php');

class Controller
{
    public function bienvenu()
    {
        require('views/bienvenu.php');
    }

    //récupération des  articles sur la page accueil et pagination
    public function accueil()
    {
        $post_manager = new Post_Manager();
        
        //nombre d'article
        $nb_articles = $post_manager->compte_articles();
        
        //pagination
        $page = $_GET['page'];
        $nb_elements_par_page = 6;
        $nb_de_page = ceil($nb_articles["cpt"]/$nb_elements_par_page);
        $debut = ($page-1) * $nb_elements_par_page;
        
        //récupération des articles
        $articles = $post_manager->recup_posts($debut,$nb_elements_par_page);
        //header('Location:?action=accueil&page=1');
        require('views/accueil.php');
    }

    //connexion d'un utilisateur
    public function connexion(){
    session_start();
 
    $pseudo_connexion = null;
    $pass_connexion = null;
    $message_erreur = null;

    // si il existe des données envoyé
    if(isset($_POST['pseudo_connexion']))
    {
        $pseudo_connexion = htmlspecialchars($_POST['pseudo_connexion']);
        $pass_connexion = htmlspecialchars($_POST['pass_connexion']);
    }

    // si des données sont dans la base de donnée
    if($pseudo_connexion != null){
        $userManager = new User_Manager();
        $pseudo = $userManager->connexion($pseudo_connexion,$pass_connexion);
        $pass_correct = password_verify($pass_connexion,$pseudo['pass']);
        //si le pseudo n'éxiste pas
        if(!$pseudo)
        {
        $message_erreur = "<p>". 'mauvais identifiant ou mot de passe !' ."</p>";
        }
        else 
        {
            //Si le mot de passe est correct on fait la connexion
            if($pass_correct) 
            {
                $_SESSION['id'] = $pseudo['id'];
                $_SESSION['pseudo'] = $pseudo['pseudo'];
                $_SESSION['rang'] = $pseudo['rang'];
                header('Location:?action=accueil&page=1');
            }         
            else 
            {
                $message_erreur =  'mauvais identifiant ou mot de passe !';
            }
        }
    }
    require('views/connexion.php');
    }

    //inscription d'un nouvel utilisateur par défaut rang 3 (utilisateur)
    public function inscription(){
    $userManager = new User_Manager();
    if($_POST)
    {
        //Vérification si un pseudo existe dans la base de donnée
        $pseudo = $_POST['pseudo'];
        $utilisateur = $userManager->recup_pseudo($pseudo);

        //si le peudo n'éxiste pas dansla base de donnée
        if($utilisateur)
        {
            $erreur = "<p>" . 'le pseudo existe déjà ! veuillez choisir un autre pseudo'."</p>";
        }    
        else
        {
            //Instanciation des variables et protection des données
            $nom = htmlspecialchars($_POST['nom']) ;
            $prenom = htmlspecialchars($_POST['prenom']);
            $date_naissance = $_POST['date_naissance'];
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $email = htmlspecialchars($_POST['email']);
            $mdp = htmlspecialchars($_POST['pass']);
            $mdp_verification = htmlspecialchars($_POST['pass_verification']);
            $rang = 3;
        
            //Si les deux mots de passe renseignés sont les mêmes
            if($mdp === $mdp_verification)
            {
                //on hache le mot de passe
                $mdp_hache = password_hash($mdp, PASSWORD_DEFAULT);
    
                //Puis on créer un nouvel utilisateur
                $utilasteur = $userManager->enregistrement($nom,$prenom,$date_naissance,$pseudo,$email,$mdp_hache,$rang);
                header('Location:?action=bienvenu');
            }   
            else
            {
                $message_erreur = "<p>". 'Les mots de passe ne sont pas identiques !'."</p>";
            }
        }
    }   
    require('views/inscription.php');
    }

    //deconexion d'un utilisateur
    public function deconnexion(){
        
        session_start();
        $_SESSION = array();
        session_destroy();
        header('Location:?action=bienvenu');    
    }

    public function profil(){
        session_start();
        $post_manager = new Post_Manager();
        $pseudo = $_SESSION['pseudo'];
        $utilisateur = $_SESSION['id'];
        $signaler = 'false';
        //recupération des articles dans profil
        $articles_profil = $post_manager->recup_posts_profil($pseudo);
        if($_POST)
        {
            $message = $_POST['message'];
            //envoi d'un article dans la page accueil
            $post_manager->envoi_post($utilisateur,$pseudo,$message,$signaler);
            header('Location:?action=accueil&page=1');    
        }
        require("views/profil.php");    
    }

    //récupération des utilisateur 
    public function utilisateur(){
        $userManager = new User_Manager();
        $utilisateurs = $userManager->recup_utilisateur();
        require('views/utilisateur.php');
    }

    //creer un administrateur
    public function creer_admin()
    {
        $userManager = new User_Manager();
        $rang = '1';
        $pseudo = $_GET['pseudo'];
        $admin = $userManager->rang($rang,$pseudo);
        header('location:?action=utilisateur');
    }

    //creer un modérateur
    public function creer_moderateur()
    {
        $userManager = new User_Manager();
        $rang = '2';
        $pseudo = $_GET['pseudo'];
        $moderateur = $userManager->rang($rang,$pseudo);
        header('location:?action=utilisateur');
    }

    //creer un utilisateur (controle admin)
    public function creer_utilisateur()
    {
        $userManager = new User_Manager();
        $rang = '3';
        $pseudo = $_GET['pseudo'];
        $utilisateur = $userManager->rang($rang,$pseudo);
        header('location:?action=utilisateur');
    }

    //suprimer un utilisateur
    public function suprime_utilisateur()
    {
        $userManager = new User_Manager();
        $pseudo = $_GET['pseudo'];
        $moderateur = $userManager->delete_user($pseudo);
        header('location:?action=utilisateur');
    }

    public function video(){
        require('views/video.php');
    }

    public function dessin(){
        require('views/dessin.php');
    }

    //Récuperer un article et ses commentaires

    //recupérer un article
    public function article()
    {
        session_start();
        $post_manager = new Post_Manager();
        $comment_manager = new Comment_Manager();
        $id = (int)$_GET['id'];
        $article = $post_manager->recup_post($id);
        
        //Inserer un commmentaire
        if($_POST)
        {
            $auteur = $_SESSION['pseudo'];
            $utilisateur = $_SESSION['id'];
            $message = $_POST['commentaire'];
            $signaler = 'false';
            $comment_manager->insert_comment($id,$utilisateur,$auteur,$message,$signaler);
        }

        //récupération des commentaires
        $commentaires = $comment_manager->recup_comments($id);

        require('views/article.php');
    }

    //signaler un commentaire
    public function signal_comment()
    {
        $comment_manager = new Comment_Manager();
        $signaler = 'true';
        $id = $_GET['id'];
        $comment_manager->signaler_commentaire($signaler,$id);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    //récupération des articles (admin, modérateur)
    public function messages()
    {
        $post_manager = new Post_Manager();
        $signaler = 'false';
        $articles = $post_manager->recup_all_posts($signaler);
        $signaler = 'true';
        $articles_signales = $post_manager->recup_all_posts_signales($signaler);
        require('views/messages.php');
    }

    //supression d'un article et de ses commentaires
    public function suprime_article()
    {
        //supression d'un article
        $post_manager = new Post_Manager();
        $id = $_GET['id'];
        $post_manager->delete_article($id);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    //Signalement d'un article 
    public function signal_article_user()
    {
        $post_manager = new Post_Manager();
        $signaler = "true";
        $id = $_GET['id'];
        $post_manager->signaler_article_utilisateur($signaler,$id);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    //Modérer un article
    public function moderer_article()
    {
        $post_manager = new Post_Manager();
        $signaler = 'false';
        $id = $_GET['id'];
        $post_manager->moderer($signaler,$id);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    //Récupération des commentaires signalés et non signalés
    public function commentaire()
    {
        $comment_manager = new Comment_Manager();
        $signaler = 'true';
        $commentaires_signales = $comment_manager->recup_comments_signales($signaler);
        $signaler = 'false';
        $commentaires = $comment_manager->recup_comments_non_signales($signaler);
        require('views/commentaire.php');
    }

    //Supréssion d'un commentaire
    public function suprime_comment()
    {
        $comment_manager = new Comment_Manager();
        $id = $_GET['id'];
        $comment_manager->delete_comment($id);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    //Modéré un commentaire
    public function moderer_comment(){
        $comment_manager = new Comment_Manager();
        $signaler = 'false';
        $id = $_GET['id'];
        $comment_manager->moderer($signaler,$id);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function jeux()
    {
        require('views/jeux.php');
    }

}