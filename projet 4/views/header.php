<header>
        <div class = "connection">
            <a href = "views/connection.php" class = "button" id = "button_connection">Connection admin</a>
            <?php
            if(isset($_SESSION['id']))
            {
                ?>
                <a href = "?action=creer_billet" class = "button">Creation billet</a>
                <a href = "?action=recup_article" class = "button">Interface article</a>
                <a href = "?action=recup_commentaire" class = "button">Interface commentaire</a>
                <a href = "?action=deconnection" class = "button" id = "button_deconnection">Deconnection</a>
                <?php
            }
            ?>
        </div>
        <div class = "article">
            <a href = "?action=accueil" class = "button">Accueil</a>
            <a href = "?action=index_article" class = "button">Articles</a>
        </div>
    </header>