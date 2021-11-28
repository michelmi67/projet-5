let videoList = document.querySelector('.video_dessin_anime').querySelectorAll('iframe');
let prev = document.querySelector('.prev');
let next = document.querySelector('.next');
let page = document.querySelector('.page-num')
let maxItem = 4;
let index = 1;

let pagination_1 = new PaginationObjet(videoList,prev,next,page,maxItem,index);
pagination_1.event();
pagination_1.showList();
pagination_1.check();

