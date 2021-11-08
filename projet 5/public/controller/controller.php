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
    public function accueil()
    {
        $post_manager = new Post_Manager();
        $articles = $post_manager->recup_posts();
        require('views/accueil.php');
    }

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
    if($pseudo_connexion != null)
    {   
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

    public function inscription(){
    $userManager = new User_Manager();
    if($_POST){
        //Inscription d'un utilisateur
        
        //Instanciation et protection des données
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

            //Puis on créer un nouvel enfant
            $enfant = $userManager->enregistrement($nom,$prenom,$date_naissance,$pseudo,$email,$mdp_hache,$rang);
            header('Location:?action=accueil');   
        }
        else
        {
            $message_erreur = "<p>". 'Les mots de passe ne sont pas identiques !'."</p>";
        }
        
    }
    require('views/inscription.php');
    }

    public function deconnexion(){
        
        session_start();
        $_SESSION = array();
        session_destroy();
        header('Location:?action=accueil');    
    }

    public function profil(){
        if($_POST)
        {   
            $pseudo = $_GET['pseudo'];
            $post_manager = new Post_Manager();
            $message = $_POST['message'];
            $post_manager->envoi_post($pseudo,$message);
            header('Location:?action=accueil');
            $articles = $post_manager->recup_post_profil($pseudo);
        }
        require("views/profil.php");    
    }

    public function utilisateur(){
        $userManager = new User_Manager();
        $utilisateurs = $userManager->recup_utilisateur();
        /*$admin = $userManager->admin();*/
        require('views/utilisateur.php');
    }

    public function video(){
        require('views/video.php');
    }

    public function dessin(){
        require('views/dessin.php');
    }

    public function article()
    {
        $post_manager = new Post_Manager();
        $comment_manager = new Comment_Manager();
        $id = $_GET['article_id'];
        $article = $post_manager->recup_post($id);
        if($_POST)
        {
            $signaler = 'false';
            $auteur = "michel";
            $message = $_POST['message'];
            $comments = $comment_manager->insert_comment($id,$auteur,$message,$signaler);

        }
        require('views/article.php');
    }
}