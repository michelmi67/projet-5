<?php 
    session_start();
?>
<!DOCTYPE html>

<html lang="fr">
    <head>
        <?php include('include/head.php')?> 
    </head>
    <body class = "article">
        <!--Inclusion du header -->
        <?php include('include/header.php'); ?>
        <?php
            //connexion à la base de données
            try
            {
                $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8','root',''); 
            }
            catch(Exeption $e)
            {
                die('Erreur :' . $e->getMessage());
            }

            //Affichage d'un article;
            echo $article['titre'];
            echo $article['texte'];
            
                //bouton suivant et précédant          
                ?>
                <div class = "suivant_precedent">
                <?php
                if(!is_null($id_page_precedente)){
                    ?>
                    <a href = "?action=article&texte=<?php echo $id_page_precedente; ?>" class = "button">précédent</a>
                    <?php
                }
                if(!is_null($id_page_suivante)){
                    ?>
                    <a href = "?action=article&texte=<?php echo $id_page_suivante; ?>" class = "button">suivant</a>
                    <?php
                }
                ?>
            </div>
        
        <h2>Commentaires</h2>
        <form method = "post" action = "#">
            <input type = "text" name = "pseudo" id = "pseudo" placeholder = "Pseudo" required/><br><br>
            <textarea name = "commentaire" id = "commentaire" placeholder = "Votre commentaire" rows = "6" cols = "75" required ></textarea><br><br>
            <input type = "submit" value = "envoyé"/>
        </form>
        
        <?php
            //recupération des commentaire
            foreach($all_commentaires as $commentaire)
            {
                //si le commentaire n'est pas modéré
                if($commentaire['moderer'] == "false")
                {
                    ?>  
                    <div id = "commentaire_<?php echo $commentaire['id'];?>">
                        <table>
                            <tr>
                                <td>
                                    <strong> Le <?php echo htmlspecialchars($commentaire['date_creation_fr']), " par " , htmlspecialchars($commentaire['auteur']);  ?> :</strong> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php echo htmlspecialchars($commentaire['message']) ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href = "?action=signaler&commentaire=<?php echo $commentaire['id'] ?>" class = "button">signaler</a>
                                </td>
                            </tr>
                        </table>
                    </div>    
                <?php
            }
            // Si le message est modéré
            if($commentaire['moderer'] == 'true')
            {
                ?>  
                <div id = "commentaire_<?php echo $commentaire['id'];?>">
                    <table>
                        <tr>
                            <td>
                                <strong> Le <?php echo htmlspecialchars($commentaire['date_creation_fr']), " par " , htmlspecialchars($commentaire['auteur']);  ?> :</strong> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Message modéré !</p>
                            </td>
                        </tr>
                    </table>
                </div>    
                <?php
            }
        }
        ?>
        <!--Inclusion du footer -->
        <?php include('include/footer.php') ?>
        <!-- javascript -->
        <script src = "js/main.js"></script>
    </body>
</html>