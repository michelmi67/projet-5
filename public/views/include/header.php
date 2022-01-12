<div class = "logo">
    <div class="logo_img">
        <a href = "?action=accueil&page=1"><img src = "image/logo.png" alt = "logo du site"></a>
        <h1>Social Kids</h1>
    </div>
    <div class = "btn_connexion">
        <ul><li class = "connexion_membre" ><a href = "?action=connexion">Connecte-toi !</a></li>
            <li><img src = "image/connexion.jpg" alt = "image connexion"><li>
            <?php
            if(isset($_SESSION) AND $_SESSION != null):
            ?>    
            <ul>
                <li class = "menu_li"><a href = "?action=profil&pseudo=<?php echo $_SESSION['pseudo'];?>">Profil</a></li>
                <li class = "menu_li"><a href = "?action=deconnexion">déconnexion</a></li>
            </ul>
            <?php
            endif;
            ?>
            </li>
        </ul>
    </div>
</div>