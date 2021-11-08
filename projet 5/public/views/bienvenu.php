<!DOCTYPE HTML>
<html lang = "fr">
    <head>
        <!--inclusion du head-->
        <?php require('include/head.php');?>
    </head>
    <!--inclusion du header-->
    <?php require('include/header.php');?>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/2e63600e57.js" crossorigin="anonymous"></script>
    <body>
    <div class="carousel">
            <div class="slide">
                <div class="slide_container">
                    <div class="row">
                        <img src="image/sites.png" alt ="image sites"/>   
                        <div class="slide_explication col-sm-6">
                        </div>
                    </div>    
                </div>
            </div>
            <div class="slide">
                <div class="slide_container">
                    <div class="row">
                        <img src="image/formulaire_reservation.png" alt="image rouge">
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide_container">
                    <div class="row">
                        <img src="image/signature.png" alt ="image bleu">
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide_container">
                    <div class="row">
                        <img src="image/reservation.png" alt="image jaune">
                    </div>
                </div>
            </div>
            <i id="back" class="fas fa-arrow-circle-left"></i>
            <i id="next" class="fas fa-arrow-circle-right"></i>
            <i id="pause" class="fas fa-pause-circle"></i>
            <i id="play" class="fas fa-play-circle"></i>

        </div>
      <!--<script src = "js/CarouselObjet.js" ></script>-->
      <script src = "js/main.js"></script>
    </body> 
    