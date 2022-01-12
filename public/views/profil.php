<?php

if(!$_SESSION):
    header('Location:?action=bienvenu');
endif;
?>

<!DOCTYPE HTML>
<html lang = "fr">
    <head>
        <!--inclusion du head-->
        <?php require('include/head.php'); ?>
        <!--fontawesome-->
        <script src="https://kit.fontawesome.com/2e63600e57.js" crossorigin="anonymous"></script>
        <!--tinymce--> 
        <script src="https://cdn.tiny.cloud/1/03puxw65ydbv9n6fvxcaqfxnd9h3hk5c1hjm1afabuf62exq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    </head>
    <body class = "profil">
        <header>
            <!--inclusion du header-->
            <?php require('include/header.php'); ?>
        </header>
        <?php
        //inclusion de la barre de navigation gauche pour les utilisateurs
        if($_SESSION['rang'] == '3')
        {
            require('include/nav_left.php');
        }
        //inclusion de la barre de navigation
        require('include/nav.php');
        //inclusion de la barre de navigation admin
        require('include/nav_admin.php');
        //inclusion de la barre de navigation modérateur
        require('include/nav_moderateur.php');
        ?>
        <div class="tinymce">
            <h2>Creer un message ou insert une image</h2>
            <form method = "post" action = "?action=profil">
                <textarea name = "message" placeholder = "insert un texte ou une image"></textarea>
                <button class = "btn-primary" type = "submit">envoyer</button>
            </form>
        </div>
        <article>
            <?php
            foreach($articles_profil as $article):
                ?>
                <div class = "article">
                    <p class = "pseudo"><?php  echo $article['pseudo'], ' le ' ,  $article['date_creation_fr']; ?></p> 
                    <?php echo $article['message']; ?>
                    <a class ="supression" href = "?action=suprime_article&id=<?php echo $article['id']; ?>"><i class="fas fa-times"></i>supprimer</a>
                </div>
                <?php
            endforeach;
            ?>
        </article>
        <script>
        tinymce.init({
        language : "fr_FR",
        width:"800",
        height: "400",
        selector: 'textarea',
        plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak emoticons',
        toolbar_mode: 'floating',
        entity_encoding: "numeric",
        
        });
        </script>
        <script src = "js/AlertObjet.js"></script>
        <script src = "js/main_alert.js"></script>
    </body>
</html>
    
    