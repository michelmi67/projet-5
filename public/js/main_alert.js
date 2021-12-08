let buttonSupprime = document.querySelector('.supression');
let buttonSignaler = document.querySelector('.signaler');
let utilisateur = document.querySelector('.utilisateur_2')

let alert_1 = new AlertObjet(buttonSupprime,buttonSignaler,utilisateur);
alert_1.eventSuprime();
alert_1.eventSignaler();
