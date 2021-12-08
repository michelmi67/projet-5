<?php session_start();
if($_SESSION['rang'] !=='1'):
    header('Location:?action=bienvenu');
endif;
?>
<!DOCTYPE HTML>
<html lang = "fr">
    <head>
        <!--inclusion du head-->
        <?php require('include/head.php');?>
        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/2e63600e57.js" crossorigin="anonymous"></script>
    </head>
    <body class = "utilisateur">
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
        <h1>Utilisateur</h1>
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>NOM</td>
                        <td>Prenom</td>
                        <td>Date de naissance</td>
                        <td>Pseudo</td>
                        <td>Email</td>
                        <td>Rang</td>
                        <td>Action</td>
                        <td>Date de creation</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($utilisateurs as $utilisateur):
                    ?>
                    <tr>
                        <td><?php echo $utilisateur['id'];?></td>
                        <td><?php echo $utilisateur['nom'];?></td>
                        <td><?php echo $utilisateur['prenom'];?></td>
                        <td><?php echo $utilisateur['date_naissance_fr'];?></td>
                        <td><?php echo $utilisateur['pseudo'];?></td>
                        <td><?php echo $utilisateur['email'];?></td>
                        <td><?php echo $utilisateur['rang'];?></td>
                        <td>
                            <a href = "?action=creer_admin&pseudo=<?php echo $utilisateur['pseudo']; ?>"><i class="fas fa-lock-open"></i></a>
                            <a href= "?action=creer_moderateur&pseudo=<?php echo $utilisateur['pseudo']; ?>"><i class="fas fa-unlock"></i></a>
                            <a class = "utilisateur_2" href = "?action=creer_utilisateur&pseudo=<?php echo $utilisateur['pseudo']; ?>"><i class="fas fa-lock"></i></a>
                            <a class ="supression" href = "?action=suprime_utilisateur&pseudo=<?php echo $utilisateur['pseudo']; ?>"><i class="fas fa-times"></i></a>
                        </td>
                        <td><?php echo $utilisateur['date_creation_fr'];?></td>
                    </tr>    
                    <?php
                endforeach;
                ?>
            </tbody>
        </table>
        <script src = "js/AlertObjet.js"></script>
        <script src = "js/main_alert.js"></script>
    </body>
</html>