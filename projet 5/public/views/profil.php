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
    <?php require('include/header.php'); ?>
    <script src="https://cdn.tiny.cloud/1/03puxw65ydbv9n6fvxcaqfxnd9h3hk5c1hjm1afabuf62exq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <body class = "profil">
        <?php
        if($_SESSION['rang']=== "1"){
            ?>
            <div class="nav_admin">
                <a href = "?action=utilisateur"><div class = "button">Utilisateur</div></a>
                <a href = "?action=message"><div class = "button">message</div><a>
                <a href = "?action=commentaire"><div class = "button">commentaire</div></a>
            </div>
            <?php
        } 
        ?>
        <div class="tinymce">
            <h2>Creer un message ou insert une image</h2>
            <form method = "post" action = "?action=profil&pseudo= <?php echo $_GET['pseudo']; ?>">
                <textarea name = "message" placeholder = "insert un texte ou une image"></textarea>
                <button class = "btn-primary" type = "submit">envoyer</button>
            </form>
        </div>
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
        <script>
        tinymce.init({
        language : "fr_FR",
        width:"800",
        height: "400",
        selector: 'textarea',
        plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak emoticons',
        toolbar_mode: 'floating',
        });
        </script>
    </body>
    
    