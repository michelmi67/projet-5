<?php
if($_SESSION['rang'] === "1"):
    ?>
    <div class= "nav_admin">
        <a href = "?action=utilisateur"><div class = "button">Utilisateurs</div></a>
        <a href = "?action=messages"><div class = "button">messages</div></a>
        <a href = "?action=commentaire"><div class = "button">commentaires</div></a>
    </div>
    <?php
endif;
?>