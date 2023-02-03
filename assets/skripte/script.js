const pokedex = document.getElementById("pokedex"); //dohvaća listu

console.log(pokedex);

const fetchPokemon = async () => {
  /*const promimes = [];
  for (let i = 1; i <= 151; i++) {
    const url = `https://pokeapi.co/api/v2/pokemon/${i}`;
    promimes.push(fetch(url).then((res) => res.json())); //optimzacija za vrijeme
  }

  Promise.all(promimes).then((results) => {
    //svi ce paralelno se izvrsiti, te imamo pristup arrayu
    const pokemon = results.map((data) => ({
      //ide kroz array i stvara novi array u formatu koji smo predali
      name: data.name,
      id: data.id,
      image: data.sprites["front_default"],
      type: data.types.map((type) => type.type.name).join(","),
    }));
    diplayPokemon(pokemon);
  });*/
  
  const url = `https://pokeapi.co/api/v2/pokemon?limit=905`;
  const res = await fetch(url);
  const data = await res.json();
  const pokemon = data.results.map((result, index) => ({
    ...result,  //spread operator, uzet ce sve iz rezultata
    id: index + 1,
    image: `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/${
      index + 1
    }.png`,
  }));

  displayPokemon(pokemon);
};

const displayPokemon = (pokemon) => {
  console.log(pokemon);
  const pokemonHTMLString = pokemon
    .map(
      (pokeman) => `
    <li class="card" onclick="selectPokemon(${pokeman.id})">
        <img class="card-image" src="${pokeman.image}"/>
        <h2 class="card-title">${pokeman.id}. ${pokeman.name}</h2>
    </li>
    `
    )
    .join("");
  pokedex.innerHTML = pokemonHTMLString;
};

const selectPokemon = async (id) => {
  const url = `https://pokeapi.co/api/v2/pokemon/${id}`;
  const res = await fetch(url); //ceka da "promise" vrati rezultat
  const pokeman = await res.json();
  displayPopup(pokeman);
};

const displayPopup = (pokeman) => {
  console.log(pokeman);
  const type = pokeman.types.map((type) => type.type.name).join(", ");
  const image = pokeman.sprites["front_default"];
  const bimage = pokeman.sprites["back_default"];
  const simage = pokeman.sprites["front_shiny"];
  const sbimage = pokeman.sprites["back_shiny"];
  const htmlString = `
    <div class="popup">
    <button id="closeBtn" onclick="closePopup()">Close</button>
    <div class="card">
        <div class="column">
        <img class="card-image" src="${image}"/>
        </div>
        <div class="column">
        <img class="card-image" src="${bimage}"/>
        </div>
        <div class="column1">
        <img class="card-image" src="${simage}"/>
        </div>
        <div class="column1">
        <img class="card-image" src="${sbimage}"/>
        </div>
        <h2 class="card-title">${pokeman.id}. ${pokeman.name}</h2>
        <p><small>| Visina: </small> ${
          pokeman.height / 10
        } M | <small>Težina: </small> ${
    pokeman.weight / 10
  } Kg | <small>Tip: </small> ${type} | <small class="type ${type}"> </small> </p>
    </div>
    </div>
  `;
  pokedex.innerHTML = htmlString + pokedex.innerHTML;
};

// dodati tipove

const closePopup = () => {
  const popup = document.querySelector(".popup");
  popup.parentElement.removeChild(popup);
};

fetchPokemon();
