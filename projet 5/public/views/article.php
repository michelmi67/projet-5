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
        <!--fontawesome-->
        <script src="https://kit.fontawesome.com/2e63600e57.js" crossorigin="anonymous"></script>
    </head>
    <!--inclusion du header-->
    <header>
        <?php require('include/header.php'); ?>
    </header>
    <?php 
    //inclusion de la barre de navigation gauche
     require('include/nav_left.php'); 
    //inclusion de la barre de navigation
    require('include/nav.php');
    //inclusion de la barre de navigation admin
    require('include/nav_admin.php');
    //inclusion de la barre de navigation modérateur
    require('include/nav_moderateur.php');
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
            <div class="commentaire" id = "commentaire_<?php echo $commentaire['id']; ?>">
                <p class = "pseudo"><?php echo $commentaire['auteur'], ' le ', $commentaire['date_creation_fr'] ?></p>
                <p><?php echo htmlspecialchars($commentaire['message']); ?></p>
                    <?php
                    //Si un utilisateur veut signaler un commentaire
                    if($_SESSION['rang'] === 3)
                    {
                        ?>
                        <a href = "?action=signal_comment&id=<?php echo $commentaire['id']; ?>"><i class="fas fa-exclamation-triangle"></i>signaler</a>
                        <?php
                    } 
                    ?>
                    <?php
                    //Si l'auteur, un modérateur ou un admin veulent supprimer un commentaire 
                    if($_SESSION['pseudo'] === $commentaire['auteur'] OR $_SESSION['rang'] === '1' OR $_SESSION['rang'] === '2')
                    {
                        ?>
                        <a href = "?action=suprime_comment&id=<?php echo $commentaire['id']; ?>"><i class="fas fa-times"></i>supprimer<a>
                        <?php
                    }
                    ?>
            </div>
            <?php
        }
        ?>
         
    </body>
</html>