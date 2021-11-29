
//déclaration des variables
let canvas = document.getElementById('canvas');
let ctx = canvas.getContext("2d");
let cleanCanvas = document.getElementById('bt-clear');
let black = document.getElementsByClassName('noir')[0];
let yellow = document.getElementsByClassName('jaune')[0];
let red = document.getElementsByClassName('rouge')[0];
let blue = document.getElementsByClassName('bleu')[0];
let green = document.getElementsByClassName('vert')[0];
let pink = document.getElementsByClassName('rose')[0];
let grey = document.getElementsByClassName('gris')[0];
let white = document.getElementsByClassName('blanc')[0];
let violet = document.getElementsByClassName('violet')[0];
let orange = document.getElementsByClassName('orange')[0];
let turquoise = document.getElementsByClassName('turquoise')[0];
let brown = document.getElementsByClassName('brun')[0];
let pen = document.querySelector('.stylo').querySelector('i');
let rubber = document.querySelector('.gomme').querySelector('i');
let btnDownload = document.querySelector('#enregistrer');
let image = document.querySelector('#imgConverted');

//Instanciation du canvas
let canvas_1 = new CanvasObjet(canvas,ctx,cleanCanvas,black,yellow,red,blue,green,pink,grey,white,violet,orange,turquoise,brown,pen,rubber,btnDownload,image);
canvas_1.canvasEvent();
canvas_1.changeColor();
canvas_1.download();


