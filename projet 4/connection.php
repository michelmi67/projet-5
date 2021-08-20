<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Blog de Jean Forteroche</title>
        <meta charset = " utf-8"/>
    </head>
    <header>
        <h1>Connection d'un administrateur</h1>
    </header>
    <body>
        <!--Formulaire d'inscription pour un admin -->
        <form method = "post" action = "">
            <p>
                
                <label for = "email">Email </label><input type = "email" name = "email" id = "email" required/></br></br>
                <label for = "pass">Mot de passe </label><input type = "password" name = "pass" id = "pass" required/></br></br>
                <input type = "submit" value = "envoyé"/>
        </form>

        <?php
        //Connection à la base de données
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root','');
        }
        catch(Exeption $e)
        {
            die('Erreur : ' .$e->getMessage());
        }

        //
        ?>

    </body>
</html>