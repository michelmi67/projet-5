class CanvasObjet {
    constructor(canvas,ctx,cleanCanvas,black,yellow,red,blue,green,pink,grey,white,violet,orange,turquoise,brown) {
        this.canvas = canvas;
        this.cleanCanvas = cleanCanvas;
        this.ctx = ctx;
        this.vide = true;
        this.painting = false;
        this.x = null;
        this.y = null;
        this.bcr = null;
        this.black = black;
        this.yellow = yellow;
        this.red = red;
        this.blue = blue;
        this.green = green;
        this.pink = pink;
        this.grey = grey;
        this.white = white;
        this.violet = violet;
        this.orange = orange;
        this.turquoise = turquoise;
        this.brown = brown;
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
        ctx.lineWidth = 3;
	    ctx.lineCap = "round";
        ctx.lineTo(e.offsetX, e.offsetY);
        ctx.stroke();
        ctx.beginPath();
        ctx.moveTo(e.offsetX, e.offsetY);
    }   
           
    // Pour effacer tous les tracés
    cleaning() {
        this.ctx.clearRect(0, 0, 1000, 1000);
        this.painting = false;    
    }
    
    // Dessiner ecran tactile
    drawTactile(e){
       if (!this.painting) return;
        this.bcr = e.target.getBoundingClientRect();
        this.x = e.targetTouches[0].clientX - this.bcr.x;
        this.y = e.targetTouches[0].clientY - this.bcr.y
        this.ctx.lineWidth = 3;
	    this.ctx.lineCap = "round";
        this.ctx.lineTo(this.x, this.y);
        this.ctx.stroke();
        this.ctx.beginPath();
        this.ctx.moveTo(this.x,this.y);         
    }

    //changer de couleur le tracer
    changeColor(){
        this.black.addEventListener('click',function(){
            
            ctx.strokeStyle = "black";
        })
        this.yellow.addEventListener('click',function(){
            
            ctx.strokeStyle = "yellow";
        })
        this.red.addEventListener('click',function(){
            
            ctx.strokeStyle = "red";
        })
        this.blue.addEventListener('click',function(){
            
            ctx.strokeStyle = "blue";
        })
        this.green.addEventListener('click',function(){
            
            ctx.strokeStyle = "green";
        })
        this.pink.addEventListener('click',function(){
            
            ctx.strokeStyle = "pink";
        })
        this.grey.addEventListener('click',function(){
            
            ctx.strokeStyle = "grey";
        })
        this.white.addEventListener('click',function(){
            
            ctx.strokeStyle = "white";
        })
        this.violet.addEventListener('click',function(){
            
            ctx.strokeStyle = "violet";
        })
        this.orange.addEventListener('click',function(){
            
            ctx.strokeStyle = "orange";
        })
        this.turquoise.addEventListener('click',function(){
            
            ctx.strokeStyle = "turquoise";
        })
        this.brown.addEventListener('click',function(){
            
            ctx.strokeStyle = "brown";
        })
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