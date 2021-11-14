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
    </head>
    <!--inclusion du header-->
    <?php require('include/header.php');?>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/2e63600e57.js" crossorigin="anonymous"></script>
    <body class = "message">
    <h1>Message</h1>

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
                
                foreach($articles_signalés as $article_signalé)
                {
                    ?>
                    <tr>
                        <td><?php echo $article_signalé['id'];?></td>
                        <td><?php echo $article_signalé['pseudo'];?></td>
                        <td><?php echo $article_signalé['message'];?></td>
                        <td><?php echo $article_signalé['signaler'];?></td>
                        <td>
                            <i class="far fa-eye"></i>
                            <i class="far fa-smile-wink"></i>
                            <a href = "?action=suprime_article&id=<?php echo $article_signalé['id']; ?>"><i class="fas fa-times"></i></a>
                        </td>
                        <td><?php echo $article_signalé['date_creation_fr'];?></td>
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
                                <i class="far fa-eye"></i>
                                <i class="far fa-smile-wink"></i>
                                <i class="fas fa-times"></i>
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