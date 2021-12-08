class PaginationObjet{
    constructor(container,prev,next,page){
        this.container = container;
        this.prev = prev;
        this.next = next;
        this.page = page;
        this.maxItem = 4;
        this.index = 1;
        this.pagination = Math.ceil(this.container.length/this.maxItem);
        console.log(next);
    }

    
    showList(){
        for(let i = 0; i < this.container.length; i++){
            this.container[i].classList.remove('show');
            this.container[i].classList.add('hide');
            if(i>=(this.index*this.maxItem)-this.maxItem && i<this.index*this.maxItem){
                this.container[i].classList.remove('hide');
                this.container[i].classList.add('show');
            }
            this.page.innerHTML = this.index;
        }
    }


    prevEvent(){
        this.index--;
        this.showList();
        this.check();
    }


    nextEvent(){
        this.index++;
        this.showList();
        this.check();
    }


    check(){
        console.log(this.index);
        console.log(this.pagination);
        if(this.index == this.pagination){
            this.next.classList.add('disabled');
        }
        else{
            console.log("next_disabled");
            console.log();
            this.next.classList.remove('disabled');
        }
        if(this.index == 1){
            this.prev.classList.add('disabled');
        }
        else{
            this.prev.classList.remove('disabled');
        }
    }

    
    
    event(){
        this.prev.addEventListener('click',this.prevEvent.bind(this));
        this.next.addEventListener('click',this.nextEvent.bind(this));
    }

}