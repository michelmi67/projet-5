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
    <body class = "jeux">
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
        <h2>Jeux</h2>
        <div class="shifoumi">
            <h3>Pierre / feuille / ciseaux</h3>
            <button class = "pierre_feuille_ciseaux"><i class="far fa-hand-rock"></i></button>
            <button class = "pierre_feuille_ciseaux"><i class="far fa-hand-paper"></i></button>
            <button class = "pierre_feuille_ciseaux" ><i class="far fa-hand-scissors"></i></button>
            <button id = "puit" class = "pierre_feuille_ciseaux" ><i class="far fa-circle"></i></button>
            <div class= "resultat"></div>
        </div>
        <h3 class = "morpion" >Morpion</h3>
        <section id="jeu">
            <div data-index = "0" class="case"></div>
            <div data-index = "1" class="case"></div>
            <div data-index = "2" class="case"></div>
            <div data-index = "3" class="case"></div>
            <div data-index = "4" class="case"></div>
            <div data-index = "5" class="case"></div>
            <div data-index = "6" class="case"></div>
            <div data-index = "7" class="case"></div>
            <div data-index = "8" class="case"></div>
        </section>
        <h4></h4>
        <button id = "recommencer" class = "btn btn-primary">recommencer</button>
        <script src = "js/MorpionObjet.js"></script>
        <script src = "js/main_morpion.js"></script>
        <script src = "js/ShifoumiObjet.js"></script>
        <script src = "js/main_shifoumi.js"></script>
        </body>
</html>