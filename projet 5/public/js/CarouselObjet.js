class Carousel {
    constructor(slides,interval,play,pause,nextButton,backButton){
        this.slides = slides;
        this.interval = interval;
        this.slideIndex = 0;
        this.intervalId = null;
        this.play = play;
        this.pause = pause;
        this.clicked = 1;
        this.nextButton = nextButton;
        this.backButton= backButton;
        
        
    }

    //cration du carousel
    showSlides(n) {
        if (n > this.slides.length) {
            this.slideIndex = 1}
        if (n < 1) {
            this.slideIndex = this.slides.length
        }
        for (let i = 0; i < this.slides.length; i++) {
            this.slides[i].style.display = "none";
        }
        this.slides[this.slideIndex-1].style.display = "block";
    }

    //évènement du boutons suivant du slider 
    plusSlides() {
        
        if(this.clicked == 2){
            this.showSlides(this.slideIndex +=1);
            this.stop();
        }
        if(this.clicked == 1){
            this.showSlides(this.slideIndex +=1);
            this.stop();
            this.intervalSlide();
        }
    }

    //évènement du boutons précédant du slider 
    moinSlides() {
        
        if(this.clicked == 2){
            this.showSlides(this.slideIndex -=1);
            this.stop();
        }
        if(this.clicked == 1){
            this.showSlides(this.slideIndex -=1);
            this.stop();
            this.intervalSlide();
        }
    }

    //événement lors de l'interval 
    defileDroit(){
        
        for (let i = 0; i < this.slides.length; i++){
            this.slides[i].style.display = "none";
        };
        this.slideIndex++
        if(this.slideIndex > this.slides.length){
            this.slideIndex = 1;
        }
        this.slides[this.slideIndex-1].style.display = "block";
        this.stop();
        this.intervalSlide();
    }
    
    //création de l'interval
    intervalSlide(){
        this.intervalId = setTimeout(this.defileDroit.bind(this),this.interval);
        
    }

    //stop l'interval
    stop(){
        
        clearTimeout(this.intervalId);
    }

    setTimer(){

        if(this.clicked == 1 ){
            this.stop();
            this.pause.style.display="none";
            this.play.style.display="block";
            this.clicked = 2;
        }else {
            this.intervalSlide();
            this.pause.style.display="block";
            this.play.style.display="none";
            this.clicked = 1;
        }
    } 

    // touche du clavier
    keycode(e){
        if(e.keyCode === 37){
            this.moinSlides();
        }
        else if(e.keyCode === 39){
            this.plusSlides();
        }
        else if(e.keyCode === 32){
            this.setTimer();
            e.preventDefault();
        }
    }
    
    carouselEvent(){
        //évenement lorsque l'on clique sur le bouton suivant du carousel
        this.nextButton.addEventListener("click",this.plusSlides.bind(this));
        //évènement lorsque l'on clique sur le bouton précédent du carousel
        this.backButton.addEventListener("click",this.moinSlides.bind(this));
        //évenement lorsque l'on clique sur le bouton play/pause du carousel
        this.pause.addEventListener("click",this.setTimer.bind(this));
        this.play.addEventListener("click",this.setTimer.bind(this));
        //Evennement du carousel en utilsant le clavier
        document.addEventListener("keydown",this.keycode.bind(this))
    }
}