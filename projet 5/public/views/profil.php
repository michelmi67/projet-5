<?php 
session_start();
if(!isset($_SESSION['pseudo_enfant'])){
    header('Location:?action=accueil');
}
?>

<!DOCTYPE HTML>
<html lang = "fr">
    <head>
        <!--inclusion du head-->
        <?php require('include/head.php'); ?>
    </head>
    <!--inclusion du header-->
    <?php require('include/header.php'); 