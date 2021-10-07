<?php 
    session_start();
    
?>
<!DOCTYPE html>

<html lang="fr">
    <head>
        <?php include('include/head.php')?>
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