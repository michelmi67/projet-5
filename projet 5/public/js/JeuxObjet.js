class JeuxObjet{
    constructor(buttons,divResultat){

        this.buttons = buttons;
        this.joueur = null;
        this.robot = null;
        this.resultat = null;
        this.divResultat = divResultat;
    }

    pierreFeuilleCiseaux(){
        for(let i = 0; i < buttons.length; i++){
            this.buttons[i].addEventListener('click', function(){
                this.joueur = buttons[i].innerHTML;
                // le robot joue aléatoirement
                this.robot = buttons[Math.floor(Math.random() * buttons.length)].innerHTML;
                
                //logique du jeux

                //si égalité
                if(this.joueur === this.robot){
                    this.resultat = 'égalité !';
                }

                //Pierre gagne contre ciseaux / feuille gagne contre pierre / ciseaux gagne contre feuille
                else if ((this.joueur === buttons[0].innerHTML && this.robot === buttons[2].innerHTML) || (this.joueur === buttons[1].innerHTML && this.robot === buttons[0].innerHTML) 
                || (this.joueur === buttons[2].innerHTML && this.robot === buttons[1].innerHTML)){
                    this.resultat = "gagné !";
                }
                //Puit gagne contre ciseaux et pierre
                else if((this.joueur === buttons[3].innerHTML && this.robot === buttons['2'].innerHTML) || this.joueur === buttons[3].innerHTML && this.robot === buttons[0].innerHTML ){
                    this.resultat = "gagné avec la technique secrète !"
                }
                else{
                    this.resultat = "perdu !";
                }
                divResultat.innerHTML = `
                 Joueur : ${this.joueur} </br>
                 Robot : ${this.robot} </br>
                 ${this.resultat}
                `;
            });
        }   
    }
}

