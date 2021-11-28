class PaginationObjet{
    constructor(videoList,prev,next,page,maxItem,index){
        this.videoList = videoList;
        this.prev = prev;
        this.next = next;
        this.page = page;
        this.maxItem = maxItem;
        this.index = index;
        this.pagination = Math.ceil(this.videoList.length/this.maxItem);
    }

    
    showList(){
        for(let i = 0; i < this.videoList.length; i++){
            this.videoList[i].classList.remove('show');
            this.videoList[i].classList.add('hide');
            if(i>=(this.index*this.maxItem)-this.maxItem && i<this.index*this.maxItem){
                this.videoList[i].classList.remove('hide');
                this.videoList[i].classList.add('show');
            }
            page.innerHTML = this.index;
        }
    }

    prevEvent(){
        this.index--;
        this.showList();
        this.check();
    }

    nextEvent(){
        this.index++,
        this.showList();
        this.check();
    }

    check(){
        if(this.index == this.pagination){
            this.next.classList.add('disabled');
        }
        else{
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