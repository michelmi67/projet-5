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
        <!--fontawesome-->
        <script src="https://kit.fontawesome.com/2e63600e57.js" crossorigin="anonymous"></script> 
    </head>
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
    <body class = "jeux">
        <h2>Jeux</h2>
        <div class="shifoumi">
            <h3>Pierre / feuille / ciseaux</h3>
            <button class = "pierre_feuille_ciseaux"><i class="far fa-hand-rock"></i></button>
            <button class = "pierre_feuille_ciseaux"><i class="far fa-hand-paper"></i></button>
            <button class = "pierre_feuille_ciseaux" ><i class="far fa-hand-scissors"></i></button>
            <button id = "puit" class = "pierre_feuille_ciseaux" ><i class="far fa-circle"></i></i></button>
            <div class= "resultat"></div>
        </div>
        <script src = "js/JeuxObjet.js"></script>
        <script src = "js/main_jeux.js"></script>
    </body>
</html>