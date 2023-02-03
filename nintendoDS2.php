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
    <script src="../assets/skripte/include.js"></script>
    <title>Poképedia</title>
  </head>
  <body id="nintendoDS2">
  <header><?php include './navbar.php'; ?></header>
    <main class="mt-5">
      <div class="container-fluid">
        <div class="row container-fluid">
          <div class="col-md-4 text-white" id="testni_div">
            <h1>Nintendo DS</h1>
            <p>
              NintendoDS (NDS ili samo DS) (jpn. ニンテンドーDS) je bio prva
              Nintendova konzola s dva ekrana (DS - dual screen). Konzola je
              bila veća nego "Game Boy" konzole, i nije viša stala u dlan ruke
              nego se morala koristi s obje ruke. Donji ekran je bio na dodir,
              DS je imao ugrađeni mikrofon i mogao se spojiti na Wi-Fi. Uz
              konzolu je dolazio i "Stylus" koji se mogao spremiti u konzolu
              kada se ne koristi. Nakon orginalnog DS-a jos 3 iteracije su bile
              objavljenje (DS lite, DSi, DSi XL). Uključujući sve iteracije
              prodalo se oko 150 milijuna konzoli, i tada je bila druga
              najprodavanija konzola samo iza "Playstation 2". To je bila prva
              konzola koja je prvo izašla na Sjeverno Američko tržište, a ne
              Japansko, igraj je od 2004. do 2005. izašla jos na Južno Korejsko,
              Tajvansko, Australsko, Novo Zelandsko, Europsko, Indijsko, Kinesko
              i Hong Kong-ovsko tržište. Ostale iteracije su manje više izašle
              sa ista tržišta s dodatcima na tržište kao Turska, Brazil i Južna
              Afrika.
            </p>
            <img
              class="col-md-12"
              src="./assets/slike/nintednoDS.jpg"
              alt="Nintendo DS"
            />
          </div>
          <div class="col-md-4 text-white" id="testni_div">
            <h1>Igrice</h1>
            <h3>Pokémon Black i White</h3>
            <p>
              Pokémon Black (jpn. ポケットモンスター ブラック) i White (jpn.
              ポケットモンスター ホワイト) su prve igre pete generacije. Radnja
              se odvija u takozvanoj regiji "Unova", i za razliku od prethodnih
              igara, pokemoni iz prošlih generacija nisu dostupni igračima sve
              dok se ne pobjede zlikovci priče, a to su "Team Plasma". S novom
              generacijom uvedeno je čak 156 novih pokemona, što je najviše do
              sada po jednoj generaciji. Igra je prvo puštena na domaćem tržištu
              u Japanu (18.rujna.2010.), dok je sljedeće godine igrica izašla na
              tržišta u Sjevernoj Americi, Europi i Australiji.
            </p>
            <h3>Pokémon Black2 i White2</h3>
            <p>
              Pokémon Black2 (jpn. ポケットモンスター ブラック ２) i White2
              (jpn. ポケットモンスター ホワイト ２) su direktni nastavci na
              događanja u prethodnim igrama. Radnja se dešava dvije godine nakon
              završetka Black i White verzije, oktljučana su nova područja na
              mapi, dok su neka prije dostupna sada zaključana. Pokedex sada
              sadrži i pokemone koji su bili u prošlim regijama, isto tako
              maskota "Kyurem" sada ima dvije nove forme "Kyurem Black" na
              naslovnici Black2 i "Kyurem White" na naslovnici White2. Igra je
              2012. puštena na Japansko, Sjeverno Američko, Europsko, Australsko
              i Južno Korejsko tržište.
            </p>
          </div>
          <div class="col-md-4 text-white">
            <h1>Naslovnice</h1>
            <div class="row">
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_black.jpg"
                alt="Pokemon Black"
              />
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_white.jpg"
                alt="Pokemon white"
              />
            </div>
            <br><br><br><br><br>
            <div class="row">
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_black2.jpg"
                alt="Pokemon Black2"
              />
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_white2.jpg"
                alt="Pokemon White2"
              />
            </div>
          </div>
        </div>
    </main>
    <footer class="container-fluid bg-dark text-center text-white text-lg-start">
        <?php include './snippets/footer.html'; ?>
    </footer>  
  
  </body>
</html>
