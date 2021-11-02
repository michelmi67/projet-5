<?php
include('model/Manager.php');
include('model/UserManager.php');

class Controller
{
    public function accueil()
    {
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
        $userManager = new UserManager();
        $pseudo = $userManager->connexion($pseudo_connexion,$pass_connexion);
        $pass_correct = password_verify($pass_connexion,$pseudo['pass_enfant']);
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
                $_SESSION['pseudo_enfant'] = $pseudo['pseudo_enfant'];
                $_SESSION['rang'] = $pseudo['pseudo_enfant'];
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
    $userManager = new UserManager();
    if($_POST){
        //Vérification de l'age du representant légal qui inscrit son enfant
        // date d'aujourd'hui
        $date = new DateTime();
        // date - 18 ans
        $date_18 = $date->sub(new DateInterval('P18Y'));
        // si $_POST['date_naissance'] est au format date par exemple = 2001-12-25
        $date_naissance = new DateTime($_POST['date_naissance']);
        if($date_naissance >= $date_18)
        {
            //le visiteur a PAS encore 18 ans
            $erreur = "<br><br><br><p>".'L\'age de ton résponsable légal n\'est pas valide ! '."</p>";
        }
        else
        {
            //Inscription d'un enfant
            //Instanciation et protection des données
            $nom = htmlspecialchars($_POST['nom_enfant']) ;
            $prenom = htmlspecialchars($_POST['prenom_enfant']);
            $date_naissance = $_POST['date_naissance_enfant'];
            $pseudo = htmlspecialchars($_POST['pseudo_enfant']);
            $email = htmlspecialchars($_POST['email_parent']);
            $mdp = htmlspecialchars($_POST['pass_enfant']);
            $mdp_verification = htmlspecialchars($_POST['pass_verification_enfant']);
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
    }
    require('views/inscription.php');
    }

    public function deconnexion(){
        $userManager = new UserManager();
        session_start();
        $_SESSION = array();
        session_destroy();
        header('Location:?action=accueil');    
    }

    public function profil(){
        $userManager = new UserManager();
        $profil = $userManager->recup_id();
        require("views/profil.php");    
    }
}