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
    <body class = "article">
        <!--Inclusion du header -->
        <?php include('header.php'); ?>
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
            
            //bouton suivant et précédent
            $id_page_courante = (int)$_GET['texte'];
            
            ?>
            <div class = "suivant_precedent">
                <?php
                //Récupération des Index dans le tableau ID 
                $index_page_courante = array_search($id_page_courante, $tableau_ids);
                $index_page_precedente = $index_page_courante-1;
                $index_page_suivante = $index_page_courante+1;

                //Récupération des ID des pages en fonction de ces index
                if(array_key_exists($index_page_precedente,$tableau_ids))
                {
                    $id_page_precedente = $tableau_ids[$index_page_precedente];
                }
                else
                {
                    $id_page_precedente = null;
                }
                if(array_key_exists($index_page_suivante,$tableau_ids))
                {
                    $id_page_suivante = $tableau_ids[$index_page_suivante];
                }
                else
                {
                    $id_page_suivante = null;
                }
                
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
        <form method = "post" action = "">
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
        <?php include('footer.php') ?>
        <!-- javascript -->
        <script src = "js/main.js"></script>
    </body>
</html>