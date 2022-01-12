let slides = document.querySelectorAll(".slide");
let play = document.querySelector("#play");
let pause = document.querySelector("#pause"); 
let nextButton = document.querySelector("#next");
let backButton =  document.querySelector("#back");
let carousel_1 = new Carousel(slides,5000,play,pause,nextButton,backButton);
carousel_1.showSlides(carousel_1.slideIndex);
carousel_1.defileDroit();
carousel_1.carouselEvent();