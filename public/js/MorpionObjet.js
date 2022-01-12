class MorpionObjet{
    constructor(statut,cellule,recommencerJeu,etatJeu,jeuActif,joueurActif){
        this.statut = statut;
        this.cellule = cellule;
        this.jeuActif = jeuActif;
        this.joueurActif = joueurActif;
        this.etatJeu = etatJeu;
        this.conditionsVictoire =   [[0,1,2],
                                    [3,4,5],
                                    [6,7,8],
                                    [0,3,6],
                                    [1,4,7],
                                    [2,5,8],
                                    [0,4,8],
                                    [2,4,6]];
        this.recommencerJeu = recommencerJeu;
        this.indexCase = "";
        
    }

    gagne(){
        statut.innerHTML = `le joueur ${this.joueurActif} a gagné`;
    }

    egalite(){
        statut.innerHTML = 'égalité';
    }

    tourJoueur(){
        statut.innerHTML = `c'est au tour du joueur ${this.joueurActif}`;
    }

    event(){
        this.cellule.forEach(cell => cell.addEventListener('click', event =>{
            
            this.gestionClicCase(etatJeu,jeuActif,joueurActif,event.target);
        }));
            
        this.recommencerJeu.addEventListener('click',this.recommencer.bind(this));
    }

    gestionClicCase(etatJeu,jeuActif,joueurActif,cell){
        //on récupère lindex de la case cliquée
        let indexCase = [...cell.parentElement.children].indexOf(cell);

        if(this.etatJeu[indexCase] !== "" || !this.jeuActif){
            return;
        }
            etatJeu[indexCase] = this.joueurActif;
            cell.innerHTML = this.joueurActif;
            
        
        this.verifGagne()
    }

    verifGagne(){
        let tourGagnant = false;
        
        for(let conditionVictoire of this.conditionsVictoire){
            let val1 = etatJeu[conditionVictoire[0]];
            let val2 = etatJeu[conditionVictoire[1]];
            let val3 = etatJeu[conditionVictoire[2]];
            if(val1 == "" || val2 == "" || val3 == ""){
                continue;
            }
            if(val1 == val2 && val2 == val3){
                tourGagnant = true;
                break;
            }
        }
        if(tourGagnant){
            this.gagne();
            jeuActif = false;
            return;
        }

        if(!etatJeu.includes("")){
            this.egalite();
            jeuActif = false;
            return
        }

        this.joueurActif = this.joueurActif == "X" ? "O" : "X";
        this.tourJoueur();
    }

    recommencer(){
        location.reload();
    }
} 

