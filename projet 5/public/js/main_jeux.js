
let buttons = document.querySelectorAll(".pierre_feuille_ciseaux");
let divResultat = document.querySelector('.resultat');
let jeux_1 = new JeuxObjet(buttons,divResultat);
jeux_1.pierreFeuilleCiseaux();