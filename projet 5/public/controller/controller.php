<?php

class Controller
{

    public function accueil()
    {
        require('views/accueil.php');
    }

    public function connexion(){
        require('views/connexion.php');
    }

    public function inscription(){
        if(empty($_POST['date_naissance'])){
            $errors['date_naissance'] = "Vous devez rentrer une date de naissance valide";
        } else {
          // date d'aujourd'hui
          $date = new DateTime();
          // date - 18 ans
          $date_18 = $date->sub(new DateInterval('P18Y'));
          // si $_POST['date_naissance'] est au format date par exemple = 2001-12-25
          $date_naissance = new DateTime($_POST['date_naissance']);
          if($date_naissance >= $date_18)
          {
          //le visiteur a PAS encore 18 ans
            $erreur = 'Un de tes parents ou un représentant légale doit t\'inscrire';
          }
        }
        require('views/inscription.php');
    }
}