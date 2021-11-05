<?php
session_start();

?>
<!DOCTYPE HTML>
<html lang = "fr">
    <head>
        <!--inclusion du head-->
        <?php require('include/head.php'); ?>
    </head>
    <!--inclusion du header-->
    <?php require('include/header.php'); 
    //inclusion de la barre de navigation gauche
     require('include/nav_left.php'); 
    //inclusion de la barre de navigation
    require('include/nav.php');
    ?>
    <body class = "accueil">
        <h2 class = "accueil_h2">Actualité</h2>
        <article>
            <?php
            foreach($articles as $article)
            {
                ?>
                <div class = "article">
                    <p class = "pseudo"><?php  echo $article['pseudo'], ' le ' ,  $article['date_creation_fr']; ?></p> 
                    <?php echo $article['message'] ?>;
                </div>
                <?php
            }
            ?>
        </article>
    </body>   
</html>