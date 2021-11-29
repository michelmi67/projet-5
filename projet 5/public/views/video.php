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
            <div class="video_dessin_anime">
                <iframe width="300" height="200" src="https://www.youtube-nocookie.com/embed/DEDm0N70chs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="300" height="200" src="https://www.youtube.com/embed/Yap-xKjln3c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="300" height="200" src="https://www.youtube.com/embed/9fQ5bW-bTig" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="300" height="200" src="https://www.youtube.com/embed/D93IehjZ1Uk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        
                <iframe width="300" height="200" src="https://www.youtube.com/embed/yjKDe_t9vmI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="300" height="200" src="https://www.youtube.com/embed/tSCw048y7T8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="300" height="200" src="https://www.youtube.com/embed/JNvoW7HtEAU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                <iframe width="300" height="200" src="https://www.youtube.com/embed/y9qlEO_A8mU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="300" height="200" src="https://www.youtube.com/embed/_nbWRs1ffl8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                <iframe width="300" height="200" src="https://www.youtube.com/embed/hmqKwCtPvi0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>     
            </div>
                <div class="pagination">
                    <div class="prev">Précédent</div>
                    <div class="page">Page <span class = "page-num"></span></div>
                    <div class="next">Suivant</div>
                </div>
        </div>

        <h2>reportage</h2>
        <div class="dessin_anime">
            <div class="video_dessin_anime">
                <iframe width="300" height="200" src="https://www.youtube.com/embed/KUbT7t2pmxg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="300" height="200" src="https://www.youtube.com/embed/Mz9p-ROt1HA?list=PLJhV4fb2N3DU_b-duMRNxKbB3cim0ACJZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="300" height="200" src="https://www.youtube.com/embed/x5SdEBlF0c8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="300" height="200" src="https://www.youtube.com/embed/I7cajVnzm8k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="300" height="200" src="https://www.youtube.com/embed/ZBH1DnP-gsM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="pagination">
                    <div class="prev">Précédent</div>
                    <div class="page">Page <span class = "page-num"></span></div>
                    <div class="next">Suivant</div>
                </div>
        </div>
        <script src= "js/PaginationObjet.js"></script>
        <script src = "js/main_pagination.js"></script>    
    </body>   
</html>