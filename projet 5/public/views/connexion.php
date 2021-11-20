<!DOCTYPE HTML>
<html lang = "fr">
    <head>
        <?php include('include/head.php')?>
    </head>
    <body class = "connexion">
        <header>
            <!--Inclusion du header -->
            <?php include('include/header.php'); ?> 
        </header>   
        <h1>connexion</h1>
        <!--Formulaire d'inscription pour un admin -->
        <form method = "post" action = "?action=connexion">
            <p>
                <label for = "pseudo_connexion">Pseudo </label><input type = "text" name = "pseudo_connexion" id = "pseudo_connexion" required/><br><br>
                <label for = "pass_connexion">Mot de passe </label><input type = "password" name = "pass_connexion" id = "pass_connexion" required/><br><br>
                <button class="btn btn-secondary" type = "submit" value = "envoyé">envoyer</button>
            </p>
        </form>
        <?php 
        if(isset($message_erreur)){
            echo $message_erreur;
        }
        ?>
        <article>
            <p>Si tu n'es pas encore inscrit, demande à un de tes parents ou un représentant légale de faire l'inscription avec toi <a href ="?action=inscription">ici</a> !</p>
        </article>
        <a href = "?action=inscription"><h2>Inscription</h2></a>
    </body>
            