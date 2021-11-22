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
        <div class="casse_brique">
            <h3>Casse brique</h3>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">jouer</button>
            <?php include('include/modal.php'); ?>
        </div>
        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>    
        <script src = "js/JeuxObjet.js"></script>
        <script src = "js/main_jeux.js"></script>
        
    </body>
</html>