<?php

if(!$_SESSION){
    header('Location:?action=bienvenu');
}
?>
<!DOCTYPE HTML>
<html lang = "fr">
    <head>
        <!--inclusion du head-->
        <?php require('include/head.php'); ?>
    </head>
    <!--inclusion du header-->
    <header>
        <?php require('include/header.php'); ?>
        <script src="https://kit.fontawesome.com/2e63600e57.js" crossorigin="anonymous"></script>
    </header>
    <?php 
    //inclusion de la barre de navigation gauche
     require('include/nav_left.php'); 
    //inclusion de la barre de navigation
    require('include/nav.php');
    ?>
    <!-- Article -->
    <body class = "page_article">
        <article>
            <div class = "article">
                <p class = "pseudo"><?php  echo $article['pseudo'], ' le ' ,  $article['date_creation_fr']; ?></p>
                <?php echo $article['message'] ?>
            </div>
        </article>

        <!-- Envoie d'un commentaire -->
        <form method = "post" action = "?action=article&id=<?php echo $article['id'] ?>">
            <textarea name = "commentaire" placeholder = "ton commentaire"rows = "6" cols = "75" required></textarea><br>
            <button class = "btn-primary" type = "submit">Envoyer</button>
        </form>

        <!-- Récupération des commentaire -->
        <?php
        foreach($commentaires as $commentaire)
        {
            ?>
            <div class="commentaire">
                <p class = "pseudo"><?php echo $commentaire['auteur'], ' le ', $commentaire['date_creation_fr'] ?></p>
                <p><?php echo $commentaire['message']; ?></p>
                
                    <a href = "?action=signal_comment"><i class="fas fa-exclamation-triangle"></i>signaler</a>
                    <?php
                    //Si l'auteur veut supprimer son commentaire 
                    if($_SESSION['pseudo'] === $commentaire['auteur'])
                    {
                        ?>
                        <i class="fas fa-times"></i>
                        <?php
                    }
                    ?>
            </div>
            <?php
        }
        ?>
         
    </body>
</html>