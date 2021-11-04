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
            <label for = "date_naissance">Date de naissance du responsable légal</label><input type = "date" name = "date_naissance" id = "date_naissance"><br>
            <label for = nom>Nom</label><input type = "text" name = "nom" id = "nom" required><br>
            <label for = "prenom">Prénom</label><input type = "text" name = "prenom" id = "prenom" required><br>
            <label for = "date_naissance">Date de naissance </label><input type = "date" name = "date_naissance" id = "date_naissance" required><br>
            <label for = "pseudo">Pseudo</label><input type = "text" name = "pseudo" id = "pseudo" required><br>
            <label for = "email">Email du représentant légal</label><input type = "email" name = "email" id = "email" required><br>
            <label for = "pass">Mot de passe </label><input type = "password" name = "pass" id = "pass" required/><br>
            <label for = "pass_verification">Vérification du mot de passe </label><input type = "password" name = "pass_verification" id = "pass_verification" required/><br>
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