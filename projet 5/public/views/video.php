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
    </head>
    <header>
        <!--inclusion du header-->
        <?php require('include/header.php'); ?>
    </header>
    <body class = "video">
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
        <h2>Dessin animé</h2>
        <div class = "dessin_anime">
            <div class="video_dessin animé">
                <iframe class = "anime" width="300" height="200" src="https://www.youtube-nocookie.com/embed/DEDm0N70chs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe class = "anime" width="300" height="200" src="https://www.youtube.com/embed/Yap-xKjln3c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe class = "anime" width="300" height="200" src="https://www.youtube.com/embed/9fQ5bW-bTig" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe class = "anime" width="300" height="200" src="https://www.youtube.com/embed/D93IehjZ1Uk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        
                <iframe class = "anime" width="300" height="200" src="https://www.youtube.com/embed/yjKDe_t9vmI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
        </div>
        <div class="button">
            <button class = btn-primary>precedent</button>
            <button class = btn-primary>suivant</button>
        </div>

        <h2>reportage</h2>
        <div class="reportage">
            <iframe width="300" height="200" src="https://www.youtube.com/embed/KUbT7t2pmxg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <script src = "js/main.js"></script>    
    </body>   
</html>