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
    <header>
        <!--inclusion du header-->
        <?php require('include/header.php');?>
        <script src="https://kit.fontawesome.com/2e63600e57.js" crossorigin="anonymous"></script> 
    </header>
    <?php
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
                    <a href = "?action=article&article_id=<?php echo $article['id']; ?>"><p class = "pseudo"><?php  echo $article['pseudo'], ' le ' ,  $article['date_creation_fr']; ?></p></a> 
                    <?php echo $article['message'] ?>
                    <a href = "?action=article&article_id=<?php echo $article['id']; ?>"><i class="fas fa-comment"></i>commentaire</a>
                </div>
                <?php
            }
            ?>
        </article>
    </body>   
</html>