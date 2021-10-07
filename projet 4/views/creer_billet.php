<?php 
    session_start();
    if(!isset($_SESSION['id']))
    {
        header('Location:index.php');
    }
    ?>
<!DOCTYPE html>

<html lang="fr"  >
    <head>
        <?php include('include/head.php')?>
        <script src="https://cdn.tiny.cloud/1/03puxw65ydbv9n6fvxcaqfxnd9h3hk5c1hjm1afabuf62exq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    </head>
    <body class = "interface">
        <!--Inclusion du header -->
        <?php include('include/header.php'); ?>
        <h1>Creation d'un billet</h1>
        <form method = "post" action = "?action=creer_billet">    
            <textarea id = "titre" name = "titre" placeholder = "Inserer votre Titre" ></textarea>
            <textarea id = "texte" name = "texte" placeholder = "Ecriver votre texte"></textarea>
            <input type = "submit" value = "envoyer"/>
        </form>
        <!-- script pour le textarea titre -->
        <script>
            tinymce.init({
            selector: '#titre',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak table lists',
            max_height: 150,
            toolbar_mode: 'floating',
            });    
        </script>
         <!-- script pour le textarea texte -->
        <script>
            tinymce.init({
            selector: '#texte',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak table lists',
            min_height: 600,
            toolbar_mode: 'floating',
        });
        </script>
        <!--Inclusion du footer -->
        <?php include('include/footer.php') ?>
        <!-- javascript -->
        <script src = "js/main.js"></script>  
    </body>
</html>

