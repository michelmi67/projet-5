
let container_1= document.querySelector('.video_dessin_anime').querySelectorAll('iframe');
let prev = document.getElementsByClassName('prev')[0];
let next = document.getElementsByClassName('next')[0];
let page = document.getElementsByClassName('page-num')[0];


let pagination_1 = new PaginationObjet(container_1,prev,next,page);
pagination_1.event();
pagination_1.showList();
pagination_1.check();



let container_2 = document.querySelector('.video_reportage').querySelectorAll('iframe');
let prev_2 = document.getElementsByClassName('prev')[1];
let next_2 = document.getElementsByClassName('next')[1];
let page_2 = document.getElementsByClassName('page-num')[1];


let pagination_2 = new PaginationObjet(container_2,prev_2,next_2,page_2);
console.log(pagination_2);
pagination_2.event();
pagination_2.showList();
pagination_2.check();

let container_3 = document.querySelector('.video_musique').querySelectorAll('iframe');
let prev_3 = document.getElementsByClassName('prev')[2];
let next_3 = document.getElementsByClassName('next')[2];
let page_3 = document.getElementsByClassName('page-num')[2];

let pagination_3 = new PaginationObjet(container_3,prev_3,next_3,page_3);
pagination_3.event();
pagination_3.showList();
pagination_3.check();