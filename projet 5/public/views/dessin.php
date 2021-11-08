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
    <?php require('include/header.php'); 
    //inclusion de la barre de navigation gauche
     require('include/nav_left.php'); 
    //inclusion de la barre de navigation
    require('include/nav.php');
    ?>
    <body class = "dessin">
        <h2>Fais ton dessin !</h2>
        <div class="canvas_couleur">
            <div class = "canvas">
                <canvas id ="canvas" width ="600" height = "450"></canvas><br>
            </div>
            <div class="couleur">
                <div class="noir"></div>
                <div class="jaune"></div>
                <div class="rouge"></div>
                <div class="bleu"></div>
                <div class="vert"></div>
                <div class="rose"></div>
                <div class="gris"></div>
                <div class="blanc"></div>
                <div class="violet"></div>
                <div class="orange"></div>
                <div class="turquoise"></div>
                <div class="brun"></div>
            </div>
        </div>    
        <button type="button" class="btn btn-secondary" id ="bt-clear">effacer</button>
        <h2>Télécharge ton dessins à colorier !</h2>
        <div class = "coloriage">
            <div class = "dessin_coloriage">
                <img src = "image/lapin.jpg" alt = "image lapin"><br>
                <a href = "image/lapin.jpg" download = "lapin.jpg">télécharger</a>
            </div>
            <div class = "dessin_coloriage">
                <img src = "image/licorne.jpeg" alt = "image lapin"><br>
                <a href = "image/licorne.jpeg" download = "licorne.jpeg">télécharger</a>
            </div>
            <div class = "dessin_coloriage">
                <img src = "image/chien.jpg" alt = "image chien"><br>
                <a href = "image/chien.jpg" download = "chien.jpg">télécharger</a>
            </div>
            <div class = "dessin_coloriage">
                <img src = "image/ecureuil.jpg" alt = "image ecureuil"><br>
                <a href = "image/ecureuil.jpg" download = "ecureuil.jpg">télécharger</a>
            </div>
            <div class = "dessin_coloriage">
                <img src = "image/tortue.jpg" alt = "image tortue"><br>
                <a href = "image/tortue.jpg" download = "tortue.jpg">télécharger</a>
            </div>
            <div class = "dessin_coloriage">
                <img src = "image/dinosaure.jpg" alt = "image dinosaure"><br>
                <a href = "image/dinosaure.jpg" download = "dinosaure.jpg">télécharger</a>
            </div>
            <div class = "dessin_coloriage">
                <img src = "image/joueur_foot.jpg" alt = "image joueur foot"><br>
                <a href = "image/joueur_foot.jpg" download = "joueur_foot.jpg">télécharger</a>
            </div>
            <div class = "dessin_coloriage">
                <img src = "image/tigre.jpg" alt = "image tigre"><br>
                <a href = "image/tigre.jpg" download = "tigre.jpg">télécharger</a>
            </div>
            <div class = "dessin_coloriage">
                <img src = "image/pikachu.jpg" alt = "image pikachu"><br>
                <a href = "image/pikachu.jpg" download = "pikachu.jpg">télécharger</a>
            </div>
        </div>                      

        <script src = "js/CanvasObjet.js"></script>
        <script src = "js/main.js"></script>
    </body>   
</html>