class CanvasObjet {
    constructor(canvas,ctx,cleanCanvas) {
        this.canvas = canvas;
        this.cleanCanvas = cleanCanvas;
        this.ctx = ctx;
        this.vide = true;
        this.painting = false;
        this.x = null;
        this.y = null;
        this.bcr = null;
    }
       
    // Function (start position, finished position, draw, clear )
    startPosition(){
       this.painting = true; // mouse down active le painting
    }
    
    // Quand le tracé se termine
    finishedPosition(){
        this.painting = false;
        ctx.beginPath();
    }
    
    // Pour dessiner 
    draw(e) {
        if (!this.painting) return;
        ctx.lineWidth = 2;
	    ctx.lineCap = "round";
        ctx.lineTo(e.offsetX, e.offsetY);
        ctx.stroke();
        ctx.beginPath();
        ctx.moveTo(e.offsetX, e.offsetY);
    }   
           
    // Pour effacer tous les tracés
    cleaning() {
        this.ctx.clearRect(0, 0, 300, 150);
        this.painting = false;    
    }
    
    // Dessiner ecran tactile
    drawTactile(e){
       if (!this.painting) return;
        this.bcr = e.target.getBoundingClientRect();
        this.x = e.targetTouches[0].clientX - this.bcr.x;
        this.y = e.targetTouches[0].clientY - this.bcr.y
        this.ctx.lineWidth =2;
	    this.ctx.lineCap = "round";
        this.ctx.lineTo(this.x, this.y);
        this.ctx.stroke();
        this.ctx.beginPath();
        this.ctx.moveTo(this.x,this.y);         
    }

    canvasEvent(){
        //évènement du canvas avec la souris
        canvas.addEventListener("mousedown", this.startPosition.bind(this));
        canvas.addEventListener("mouseup",this.finishedPosition.bind(this));
        canvas.addEventListener("mousemove", this.draw.bind(this)); 
        canvas.addEventListener("mouseleave", this.finishedPosition.bind(this)); 

        //évènement du canvas avec un pad
        canvas.addEventListener("touchstart",this.startPosition.bind(this));    
        canvas.addEventListener("touchend",this.finishedPosition.bind(this));
        canvas.addEventListener("touchmove",this.drawTactile.bind(this));
            
        //vide le canvas si on clique sur le bouton effacer
        cleanCanvas.addEventListener("click",this.cleaning.bind(this));
        
    }
}