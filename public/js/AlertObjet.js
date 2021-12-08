class AlertObjet{
    constructor(buttonSupprime,buttonSignaler){
        this.buttonSupprime = buttonSupprime;
        this.buttonSignaler = buttonSignaler;
    }

     
    alertSupprimer(){
        alert('supression effectuée')
    }

    alertSignaler(){
        alert('signalement effectué');
    }


    eventSuprime(){
        this.buttonSupprime.addEventListener('click',this.alertSupprimer.bind(this));
    }
    
    eventSignaler(){
        this.buttonSignaler.addEventListener('click',this.alertSignaler.bind(this));
    }
}