<!DOCTYPE HTML>
<html lang = "fr">
    <head>
        <!--inclusion du head-->
        <?php require('include/head.php'); ?>
    </head>
    <!--inclusion du header-->
    <?php require('include/header.php'); ?>
    <body class = "inscription">
        <h1>Inscription</h1>
        <form method = "post" action = "#">
            <label for = "date_naissance">Date de naissance du responsable légal</label><input type = "date" name = "date_naissance" id = "date_naissance" required><br>
            <label for = nom_enfant>Nom de l'enfant</label><input type = "text" name = "nom_enfant" id = "nom_enfant" required><br><label for = "prenom_enfant">Prénom de l'enfant</label>
            <input type = "text" name = "prenom_enfant" id = "prenom_enfant" required><br>
            <label for = "date_naissance_enfant">Date de naissance de l'enfant</label><input type = "date" name = "date_naissance_enfant" id = "date_naissance_enfant" required><br>
            <label for = "pseudo_enfant">Pseudo de l'enfant</label><input type = "text" name = "pseudo_enfant" id = "pseudo_enfant" required><br>
            <label for = "email_parent">Email du représentant légal</label><input type = "email" name = "email_parent" id = "email_parent" required><br>
            <label for = "pass_enfant">Mot de passe </label><input type = "password" name = "pass_enfant" id = "pass_enfant" required/><br>
            <label for = "pass_verification_enfant">Vérification du mot de passe </label><input type = "password" name = "pass_verification_enfant" id = "pass_verification_enfant" required/><br>
            <button class ="btn btn-primary" type = "submit" >envoyer</button>
            <?php
                //Message d'erreur si le représentant légale n'as pas mis une bonne date de naissance 
                if(isset($erreur))
                {
                    echo $erreur;  
                }
                //Message d'erreur si les 2 mots de passe ne sont pas les mêmes
                if(isset($message_erreur))
                {
                    echo $message_erreur;
                }
            ?>
        </form> 
    </body>
    
</html>