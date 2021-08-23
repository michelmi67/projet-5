<?php 
    session_start();
?>
<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <title>Projet 4</title>
        <meta name="description" content="&&&&&&"/>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="css/style.css"/>
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"/>
        <script src="https://cdn.tiny.cloud/1/03puxw65ydbv9n6fvxcaqfxnd9h3hk5c1hjm1afabuf62exq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    </head>
    <body>
        <form action = "Deconnection.php" method = "post">
            <button type = 'submit'>Page accueil</button>
            <button type = 'submit'>Déconnection</button>
        </form>
        <form method = "post" action = "">    
            <textarea name = "article">
                Inserez votre texte !
            </textarea>
            <input type = "submit" value = "envoyé"/>
        </form>
        <script>
            tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
        });
        </script>

        <?php
            //Connection à la base de données
            try
            {
                $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root','');
            }
            catch(Exeption $e)
            {
                die('Erreur : ' .$e->getMessage());
            }

            //Si des données sont envoyé
            if($_POST)
            {
              //Envoie d'un message
                $req = $db->prepare('INSERT INTO message (article) VALUES (?)');
                $req->execute(array($_POST['article']));
            }
        ?>

        <?php var_dump($_SESSION['id']); ?>   
    </body>
</html>