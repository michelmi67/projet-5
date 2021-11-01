<!DOCTYPE HTML>
<html lang = "fr">
    <head>
        <!--inclusion du head-->
        <?php require('include/head.html'); ?>
    </head>
    <!--inclusion du header-->
    <?php require('include/header.html'); ?>
    <body>
        <form method = "post" action = "#">
            <label for = "date_naissance">Votre date de naissance</label>
            <input type = "date" name = "date_naissance" id = "date_naissance">
            <button type = "submit" >envoyer</button>
            <?php 
                if(isset($erreur)){
                    echo $erreur;  
                }
            ?>
        </form> 
    </body>
    
</html>