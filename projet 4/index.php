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
    <header>
        <div id = "connection">
            <button><a href = connection.php>Connection admin</a></button>
        </div>
    </header>
    <body>
    <?php 
        //connexion à la base de données
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root','');
        }
        catch(Exeption $e)
        {
            die('Erreur :' .$e->getMessage);
        }

        //Article de Présentation
        $req = $db->query('SELECT article FROM message');
        $donnees = $req->fetch();
        
        
            echo $donnees['article'];
        
    ?>
    <pre>
        <?php var_dump($_SESSION['id']); ?>    
    </pre>
    </body>
</html>