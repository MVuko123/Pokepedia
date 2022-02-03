<?php

include_once './snippets/konekcija.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/css.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
      data-auto-a11y="true"
    ></script>
    <link rel="shortcut icon" type="image/png" href="../assets/slike/poke_fav.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Poképedia</title>
  </head>
  <body id="gameBoy">
    <header><?php include './navbar.php'; ?></header>
    <main class="mt-5">
      <div class="container-fluid">
        <div class="row container-fluid">
          <div class="col-md-4 text-white" id="testni_div">
            <h1>Game Boy</h1>
            <p>
              Game Boy (jpn. ゲームボーイ Gēmu Bōi) je svukupni naziv za obitelj
              igraćih konzoli koje stanu u dlan ruke. Prva inačića se zvala samo
              "Game Boy" i puštena je u prodaju 21.travnja.1989.godine u Japanu,
              dok je konzola kasnijeg datuma puštena u Sjevernoj Americi
              (31.srpnja.1989.), i zadnje u Europi(28.rujna.1990.).To je bila
              prva 8-bitna konzola koja je mogla stati u ruku, imala je 2.6" LCD
              ekran. Bila je najpopularnija konzola svoga vremena, prozvodnja je
              prestala 23.ožujka.2003. Cijena se kretala oko 90$ (oko 600hrk).
              Neki od najpoznatijih naslova koji su bili dostupni za konzolu su
              "Tetris", "Pokémon", "Dokey Kong Land", "Kirby's Dream Land", "Ms.
              Pac-Man", "Super Mario", "Yoshi" i mnoge druge.
            </p>
            <img class="col-md-8" src="./assets/slike/gameBoy.jpg" alt="Game Boy" />
          </div>
          <div class="col-md-4 text-white" id="testni_div">
            <h1>Igrice</h1>
            <h3>Pokémon Red i Green</h3>
            <p>
              Pokémon Red (jpn. ポケットモンスター　赤) i Green
              (ポケットモンスター　緑) su bile ekskluzivne verzije igrice samo
              za Japan, puštene su u prodaju 27.veljače.1996. Maskota "Red"
              verzije je bila "Charizard", a maskota "Green" verzije je bila
              "Venusaur". Razlika od globalne verzije je skoro ne postojeća,
              samo je "Green" verzija pretvorena u "Blue" verziju s
              "Blastoise"-om kao maskotom. Igra se odvijala u prvoj regiji koja
              je imala naziv "Kanto", po japanskoj regiji u kojoj se nalazi
              glavi grad Tokyo.
            </p>
            <h3>Pokémon Red i Blue</h3>
            <p>
              Pokémon Red i Blue, su bile prve Pokémon videoigre koje su bile
              objavljene izvan Japana. Igra je sadržavala prvu generaciju koja
              se sastojala od 151-oga Pokémona, dok je cilj igre bio da igrač
              postane najbolji Pokémon Trener. Igra je puštena u prodaju prvo u
              Sjevernoj Americi (28.rujna.1998), nedugo nakon igrica je izašla u
              Australiji (23.listopada.1998), a skoro godinu dana nakon izašla
              je u Europi(5.listopad.1999.).
            </p>
            <h3>Pokémon Yellow</h3>
            <p>
              Puni naziv je bio "Pokémon Yellow: Special Pikachu Edition". To je
              bio "remake" igrica "Pokémon Red i Blue", ali za razliku od njih
              priča je pratila TV seriju. Na početku umjesto da s odabiru 3
              pokemona, samo jedan "Pikacu" ostaje. Nadogradnja na proše igrice
              je bila što je "Pikachu" mogao pratiti svoga trenera na mapi. Igra
              je prvo puštena na domaće japansko tržište (12.rujna.1998.),
              kasnije istog dana je puštena u Sjevernoj Americi i Australiji
              (18.listopada.1999),i na kraju u Europi (7.srpanj.2000.).
            </p>
          </div>
          <div class="col-md-4 text-white">
            <h1>Naslovnice</h1>
            <div class="row">
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_red_jpn.jpg"
                alt="Pokemon Red"
              />
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_green_jpn.jpg"
                alt="Pokemon Red"
              />
            </div>
            <div class="row">
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_red.jpg"
                alt="Pokemon Red"
              />

              <img
                class="col-md-6"
                src="./assets/slike/pkmn_blue.jpg"
                alt="Pokemon Blue"
              />
            </div>
            <div class="row">
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_yellow.jpg"
                alt="Pokemon Red"
              />
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_yellow_jpn.jpg"
                alt="Pokemon Red"
              />
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer class="bg-dark text-center text-white text-lg-start">
        <?php include './snippets/footer.html'; ?>
    </footer>
  </body>
</html>
