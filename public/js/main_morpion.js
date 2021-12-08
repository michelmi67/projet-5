let statut = document.querySelector('h4');
let recommencerJeu = document.querySelector('#recommencer');
let cell = [document.querySelectorAll('.case')];

morpion_1 = new MorpionObjet(statut,cell,recommencerJeu);
morpion_1.tourJoueur();
