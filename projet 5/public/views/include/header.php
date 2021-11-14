<div class = "logo">
    <a href = "?action=accueil"><img src = "image/logo.png" alt = "logo du site"></a>
    <h1>Social Kids</h1>
    <div class = "btn_connexion">
        <ul><li><a href = "?action=connexion">Connecte-toi !</a>
                <a href = "?action=connexion"><img src = "image/connexion.jpg" alt = "image connexion"></a>
            <li>
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