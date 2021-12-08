const data = null;

const xhr = new XMLHttpRequest();
let imgPokemon = document.querySelector(".img_pokemon");
let idPokemon = document.querySelector('.id_pokemon');
let namePokemon = document.querySelector('.nom_pokemon');
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
	if (this.readyState === this.DONE) {
        let response = JSON.parse(this.responseText);
        console.log(response);
        
        //image pokemon
        ThumbnailImage_1 = response[36].ThumbnailImage;
        let pokemonImg = `<img src="${ThumbnailImage_1}">`;
        imgPokemon.innerHTML = pokemonImg;

        //id pokemon
        idPokemon.innerHTML = "#" + response[36].number;

        //nom du pokemon
        namePokemon.innerHTML = response[36].name;
	}
});

xhr.open("GET", "https://pokedex2.p.rapidapi.com/pokedex/uk");
xhr.setRequestHeader("x-rapidapi-host", "pokedex2.p.rapidapi.com");
xhr.setRequestHeader("x-rapidapi-key", "0a100546cemsh65e3c5a210b1340p1f93b4jsn9c2ec1b83bb6");

xhr.send(data);
