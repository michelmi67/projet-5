<?php
session_start();
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
    </head>
    <body class = "accueil">
        <header>
            <!--inclusion du header-->
            <?php require('include/header.php');?>
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
        <!-- bandeau animé -->
        <div class="pere_noel">
            <img src = "image/pere_noel_1.jpg" alt = "image pere noel">
            <div class="snow">
                <div class="snow__layer"><div class="snow__fall"></div></div>
                <div class="snow__layer"><div class="snow__fall"></div></div>
                <div class="snow__layer">
                    <div class="snow__fall"></div>
                    <div class="snow__fall"></div>
                    <div class="snow__fall"></div>
                </div>
                    <div class="snow__layer"><div class="snow__fall"></div></div>
                </div>
            </div>
        </div>
        <h2 class = "accueil_h2">Actualité</h2>
        <article>
            <!--Récupération des donnée api-->
            <h3 class = "pokemon_h3">Le Pokémon du mois est :</h3>
            <div class="pokemon">
                <span class = "img_pokemon"></span>
                <div class="id_nom">
                    <span class = "id_pokemon"></span>
                    <span class = "nom_pokemon"></span>
                </div>
                <p class = pokemon_color>electrik</p>
            </div>
            <?php
            //récupération des articles
            foreach($articles as $article):
                ?>
                <div class = "article" id="article_<?php echo $article['id']; ?>">
                    <a href = "?action=article&id=<?php echo $article['id']; ?>"><p class = "pseudo"><?php  echo $article['pseudo'], ' le ' ,  $article['date_creation_fr']; ?></p></a> 
                    <?php echo $article['message'] ?>
                    <a href = "?action=article&id=<?php echo $article['id']; ?>"><i class="fas fa-comment"></i>commentaire</a>
                    <?php
                    // si un utilisateur veut signaler un article
                    if($_SESSION['rang'] === '3'):
                        ?>
                        <a class = "signaler" href = "?action=signal_article_user&id=<?php echo $article['id']; ?>"><i class="fas fa-exclamation-triangle"></i>signaler</a>
                        <?php
                        //include modal
                        include('include/modal.php');
                    endif;  
                    //Si l'auteur, un modérateur ou un admin veulent supprimer un article,
                    if($_SESSION['pseudo'] === $article['pseudo'] OR $_SESSION['rang'] == '1' OR $_SESSION['rang'] == '2'):
                        ?>
                        <a class ="supression" href = "?action=suprime_article&id=<?php echo $article['id']; ?>"><i class="fas fa-times"></i>supprimer</a>
                        <?php
                    endif;
                    ?>
                </div>
                <?php
            endforeach;

            //Pagination
            ?>
            <div class="pagination">
                <?php
                for($i = 1; $i <= $nb_de_page; $i++):
                    if($i == $page):
                        echo "<p>". $i. "</p>";
                    else:
                        echo "<a href ='?action=accueil&page=$i'>$i</a>";
                    endif;
                endfor;
            ?>
            </div>
            
        </article>
        <script src = "js/AlertObjet.js"></script>
        <script src = "js/main_alert.js"></script>
        <script src= js/main_pokemon.js></script>
    </body>   
</html>