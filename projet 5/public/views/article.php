<?php
session_start();

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
    <?php require('include/header.php'); 
    //inclusion de la barre de navigation gauche
     require('include/nav_left.php'); 
    //inclusion de la barre de navigation
    require('include/nav.php');
    ?>
    <body class = "page_article">
        <article>
            <div class = "article">
                <p class = "pseudo"><?php  echo $article['pseudo'], ' le ' ,  $article['date_creation_fr']; ?></p>
                <?php echo $article['message'] ?>
            </div>
        </article>
        <form method = "post" action = "?action=article&article_id=<?php echo $article['id'] ?>">
        <textarea name = "message" placeholder = "ton commentaire"rows = "6" cols = "75" required></textarea><br>
        <button class = "btn-primary" type = "submit">Envoyer</button>
        </form>
         
    </body>
</html>