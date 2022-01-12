let statut = document.querySelector('h4');
let cellule = document.querySelectorAll('.case');
let recommencerJeu = document.querySelector('#recommencer');
let etatJeu = ["","","","","","","","",""];
let jeuActif = true;
let joueurActif = 'X';


morpion_1 = new MorpionObjet(statut,cellule,recommencerJeu,etatJeu,jeuActif,joueurActif);
morpion_1.tourJoueur();
morpion_1.event();



