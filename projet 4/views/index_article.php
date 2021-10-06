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
        
    </head>
    <body class = "index_texte">
        <!--Inclusion du header -->
        <?php include('include/header.php'); ?>
        <h1>L'ange du passé</h1>
        <?php 
            foreach($all_articles as $article)
            {
                $texte = strip_tags($article['texte']);
                ?> 
                <table>
                    <tbody>
                        <tr>
                            <td ><?php echo $article['titre'];?> </td>
                        </tr>
                        <tr>
                            <td class = "texte_<?php echo $article['id'] ?>">
                                <?php echo substr($texte,0,1000)."...";?><br>
                                <p><a href = "?action=article&texte=<?php echo $article['id'] ?>" > lire la suite...</a></p>
                            </td>
                                                
                        </tr>            
                    </tbody>
                </table>
                <?php
            }
        ?>
        <!--Inclusion du footer -->
        <?php include('include/footer.php') ?>
        <!-- javascript -->
        <script src = "js/main.js"></script>
        
    </body>
</html>