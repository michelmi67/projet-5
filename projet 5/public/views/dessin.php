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
        <div class = "canvas">
            <h2>Fais ton dessin</h2>
            <canvas id ="canvas"></canvas><br>
            <button type="button" class="btn btn-secondary" id ="bt-clear">effacer</button>
        </div>           
        <script src = "js/CanvasObjet.js"></script>
        <script src = "js/main.js"></script>
    </body>   
</html>