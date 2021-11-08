<?php session_start();
if($_SESSION['rang'] !=='1'){
    header('Location:?action=bienvenu');
}
?>
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
    <body class = "utilisateur">
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
                    foreach($utilisateurs as $utilisateur)
                    {
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
                                <i class="fas fa-lock-open"></i>
                                <i class="fas fa-unlock"></i>
                                <i class="fas fa-lock"></i>
                                <i class="fas fa-times"></i>
                            </td>
                            <td><?php echo $utilisateur['date_creation_fr'];?></td>
                        </tr>    
                        <?php
                    }
                    
                    ?>
                </tbody>
            </table>
    </body>
</html>