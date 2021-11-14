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
                <div class = "article" id="article_<?php echo $article['id']; ?>">
                    <a href = "?action=article&id=<?php echo $article['id']; ?>"><p class = "pseudo"><?php  echo $article['pseudo'], ' le ' ,  $article['date_creation_fr']; ?></p></a> 
                    <?php echo $article['message'] ?>
                    <a href = "?action=article&id=<?php echo $article['id']; ?>"><i class="fas fa-comment"></i>commentaire</a>
                    <?php
                    // si un utilisateur veut signaler un commentaire
                    if($_SESSION['rang'] === '3')
                    {
                        ?>
                        <a href = "?action=signal_article_user&id=<?php echo $article['id']; ?>"><i class="fas fa-exclamation-triangle"></i>signaler</a>
                        <?php
                    }
                    ?>
                    <?php
                    //Si l'auteur veut supprimer son commentaire 
                    if($_SESSION['pseudo'] === $article['pseudo'] OR $_SESSION['rang'] == '1' OR $_SESSION['rang'] == '2')
                    {
                        ?>
                        <a href = "?action=suprime_article&id=<?php echo $article['id']; ?>"><i class="fas fa-times"></i>supprimer</a>
                        <?php
                    }
                    ?>
                </div>
                <?php
            }
            ?>
        </article>
    </body>   
</html>