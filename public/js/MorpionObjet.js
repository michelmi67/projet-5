class MorpionObjet{
    constructor(statut,cell,recommencerJeu){
        this.statut = statut;
        this.jeuActif = true;
        this.joueurActif = 'X';
        this.etatJeu = ["","","","","","","","",""];
        this.conditionVictoire =   [[0,1,2],
                                    [3,4,5],
                                    [6,7,8],
                                    [0,3,6],
                                    [1,4,7],
                                    [2,5,8],
                                    [0,4,8],
                                    [2,4,6]];
        this.cell = cell;
        this.recommencerJeu = recommencerJeu;
                                }

    gagne(){
        statut.innerHTML = `le joueur ${this.joueurActif} a gagné`;
    }

    egalite(){
        this.statut.innerHTML = 'égalité';
    }

    tourJoueur(){
        statut.innerHTML = `c'est au tour du joueur ${this.joueurActif}`;
    }

    event(){
        this.cell.addEventListener('click',this.gestionClicCase.bind(this));
        this.recommencer.addEventListener('click',recommencer.bind(this));
    }

   

    gestionClicCase(){
        console.log(this.cell);
    }
}