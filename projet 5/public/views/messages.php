<?php session_start();
if(!$_SESSION){
    header('Location:?action=bienvenu');
}
elseif($_SESSION['rang'] == '3'){
    header('Location:?action=bienvenu');
}
?>
<!DOCTYPE HTML>
<html lang = "fr">
    <head>
        <!--inclusion du head-->
        <?php require('include/head.php');?>
        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/2e63600e57.js" crossorigin="anonymous"></script>
    </head>
    <header>
        <!--inclusion du header-->
        <?php require('include/header.php');?>
    </header>
    <?php
    //inclusion de la barre de navigation
    require('include/nav.php');
    //inclusion de la barre de navigation admin
    require('include/nav_admin.php');
    //inclusion de la barre de navigation modérateur
    require('include/nav_moderateur.php');
    ?>
    <body class = "message">
    <h1>Articles</h1>

    <!-- Article signalé -->
    <h2>Articles signalés</h2>
    <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Pseudo</td>
                    <td>Message</td>
                    <td>signaler</td>
                    <td>Action</td>
                    <td>Date de creation</td>
                </tr>
            </thead>
            <tbody>
                <?php
                
                foreach($articles_signales as $article_signale)
                {
                    
                    ?>
                    <tr>
                        <td><?php echo $article_signale['id'];?></td>
                        <td><?php echo $article_signale['pseudo'];?></td>
                        <td><?php echo $article_signale['message'] ;?></td>
                        <td><?php echo $article_signale['signaler'];?></td>
                        <td>
                            <a href = "?action=accueil&#article_<?php echo $article_signale['id']; ?>"><i class="far fa-eye"></i></a>
                            <a href = "?action=moderer_article&id=<?php echo $article_signale['id']; ?>"><i class="far fa-smile-wink"></i></a>
                            <a href = "?action=suprime_article&id=<?php echo $article_signale['id']; ?>"><i class="fas fa-times"></i></a>
                        </td>
                        <td><?php echo $article_signale['date_creation_fr'];?></td>
                    </tr>    
                    <?php
                }
                
                ?>
            </tbody>
    </table>

    <!-- Article non signalé -->
    <h2>Articles non signalés</h2>
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Pseudo</td>
                        <td>Message</td>
                        <td>signaler</td>
                        <td>Action</td>
                        <td>Date de creation</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    foreach($articles as $article)
                    {
                        ?>
                        <tr>
                            <td><?php echo $article['id'];?></td>
                            <td><?php echo $article['pseudo'];?></td>
                            <td><?php echo $article['message'];?></td>
                            <td><?php echo $article['signaler'];?></td>
                            <td>
                                <a href = "?action=accueil&#article_<?php echo $article['id']; ?>"><i class="far fa-eye"></i></a>
                                <a href = "?action=suprime_article&id=<?php echo $article['id']; ?>"><i class="fas fa-times"></i></a>
                            </td>
                            <td><?php echo $article['date_creation_fr'];?></td>
                        </tr>    
                        <?php
                    }
                    
                    ?>
                </tbody>
            </table>
    </body>
</html>