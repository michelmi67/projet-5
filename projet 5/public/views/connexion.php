<!DOCTYPE HTML>
<html lang = "fr">
    <head>
        <?php include('include/head.html')?>
    </head>
    <body class = "connexion_enfant">
            <!--Inclusion du header -->
            <?php include('include/header.html'); ?>    
            <h1>connexion</h1>
            <!--Formulaire d'inscription pour un admin -->
            <form method = "post" action = "?action=connexion">
                <p>
                    <label for = "pseudo">Pseudo </label><input type = "pseudo" name = "pseudo" id = "pseudo" required/><br><br>
                    <label for = "pass_connexion">Mot de passe </label><input type = "password" name = "pass_connexion" id = "pass_connexion" required/><br><br>
                    <button class="btn btn-secondary" type = "submit" value = "envoyé">envoyer</button>
                </p>
            </form>
            