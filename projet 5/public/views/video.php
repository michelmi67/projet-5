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
    <body class = "video">
        <h2>Dessin animé</h2>
        <div class = "dessin_anime">
            <iframe width="300" height="200" src="https://www.youtube-nocookie.com/embed/DEDm0N70chs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="300" height="200" src="https://www.youtube.com/embed/Yap-xKjln3c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="300" height="200" src="https://www.youtube.com/embed/9fQ5bW-bTig" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="300" height="200" src="https://www.youtube.com/embed/D93IehjZ1Uk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        
            <iframe width="300" height="200" src="https://www.youtube.com/embed/yjKDe_t9vmI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <h2>reportage</h2>
        <div class="reportage">
            <iframe width="300" height="200" src="https://www.youtube.com/embed/KUbT7t2pmxg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>    
    </body>   
</html>