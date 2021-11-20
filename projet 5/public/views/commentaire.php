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
    <h1>Commentaire</h1>

    <!-- Commentaire signalé -->
    <h2>Commentaires signalés</h2>
    <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Auteur</td>
                    <td>Message</td>
                    <td>signaler</td>
                    <td>Action</td>
                    <td>Date de creation</td>
                </tr>
            </thead>
            <tbody>
                <?php
                
                foreach($commentaires_signales as $commentaire_signale)
                {
                    $message = strip_tags($commentaire_signale['message']);
                    ?>
                    <tr>
                        <td><?php echo $commentaire_signale['id'];?></td>
                        <td><?php echo $commentaire_signale['auteur'];?></td>
                        <td><?php echo substr($message,0,50)?></td>
                        <td><?php echo $commentaire_signale['signaler'];?></td>
                        <td>
                            <a href = "?action=article&id=<?php echo $commentaire_signale['id_page']; ?>#commentaire_<?php echo $commentaire_signale['id']; ?>"><i class="far fa-eye"></i></a>
                            <a href = "?action=moderer_comment&id=<?php echo $commentaire_signale['id']; ?>"><i class="far fa-smile-wink"></i></a>
                            <a href = "?action=suprime_comment&id=<?php echo $commentaire_signale['id']; ?>"><i class="fas fa-times"></i></a>
                        </td>
                        <td><?php echo $commentaire_signale['date_creation_fr'];?></td>
                    </tr>    
                    <?php
                }
                
                ?>
            </tbody>
    </table>

    <!-- Article non signalé -->
    <h2>Commentaires non signalés</h2>
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Auteur</td>
                        <td>Message</td>
                        <td>signaler</td>
                        <td>Action</td>
                        <td>Date de creation</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    foreach($commentaires as $commentaire)
                    {
                        $message = strip_tags($commentaire['message']);
                        ?>
                        <tr>
                            <td><?php echo $commentaire['id'];?></td>
                            <td><?php echo $commentaire['auteur'];?></td>
                            <td><?php echo substr($message,0,50);?></td>
                            <td><?php echo $commentaire['signaler'];?></td>
                            <td>
                            <a href = "?action=article&id=<?php echo $commentaire['id_page']; ?>#commentaire_<?php echo $commentaire['id']; ?>"><i class="far fa-eye"></i></a>
                                <a href = "?action=suprime_comment&id=<?php echo $commentaire['id']; ?>"><i class="fas fa-times"></i><a>
                            </td>
                            <td><?php echo $commentaire['date_creation_fr'];?></td>
                        </tr>    
                        <?php
                    }
                    
                    ?>
                </tbody>
            </table>
    </body>
</html>