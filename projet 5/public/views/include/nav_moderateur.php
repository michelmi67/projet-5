<?php
if($_SESSION['rang'] === "2")
{
    ?>
    <div class= "nav_moderateur">
        <a href = "?action=messages"><div class = "button">messages</a>
        <a href = "?action=commentaire"><div class = "button">commentaires</a>
    </div>
    <?php 
} 
?>