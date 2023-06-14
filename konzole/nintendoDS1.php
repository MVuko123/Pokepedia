<?php

include_once '../snippets/konekcija.php';

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
    <link rel="stylesheet" href="../assets/css/css.css" />
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
  <body id="nintendoDS1">
  <header><?php include './navbarKonzole.php'; ?></header>
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
              src="../assets/slike/nintednoDS.jpg"
              alt="Nintendo DS"
            />
          </div>
          <div class="col-md-4 text-white" id="testni_div">
            <h1>Igrice</h1>
            <h3>Pokémon Diamond i Pearl</h3>
            <p>
              Pokémon Diamond (jpn. ポケットモンスターダイヤモンド) i Pearl
              (jpn. ポケットモンスターパール) su prve igrice za novu konzolu
              "Nintendo DS" isto tako su prve igrice četvrte generacije
              pokemona, i uvode nas u "Sinnoh" regiju. Regja je zasnovana na
              Japanskome otoku "Hokkaidō". Nova regija je isto uvela novih 107
              pokemona, uveden je sustav dana i noći, novi zlikovci su "Team
              Galactic", novi sat "Pokétch", borbu između igrača u "Battle
              Tower". Pošto je DS uveo mogučnost za Wi-Fi tako je tada bilo
              moguće da se razmjenjuju pokemoni preko Wi-fi-a. Igrica je od
              2006. do 2008. bila puštena na Japansko, Sjeverno Američko,
              Australsko, Europsko i Južno Korejsko tržište.
            </p>
            <h3>Pokémon Platinum</h3>
            <p>
              Pokémon Platinum (jpn. ポケットモンスター プラチナ) je još jedna
              iteracija četvrte generacije, ali je unaprijeđena s obzirom na
              prethodne verzije. Glavna razlika u "game play"-u je da otvori
              portal za "Distortion World", i učini cijelu regiju dost
              hladnijom, što se može vidjeti kroz novu robu koju likovi nose.
              Obje maskote proslih igara i trenutna maskota "Girantina" mogu
              biti uhvaćeni. Nakon pređene igrice legendarni pokemoni iz prve
              regije "Kanto" mogu biti uhvaćeni, uz sve to još dosta novih
              stvari je bilo dodani zajedno s poboljšanjem starih stvari. Igrica
              se počela prodavati 2008. u Japanu, a 2009. na tržištima u Europi,
              Sjevernoj Americi, Australiji i Južnoj Koreji.
            </p>
            <h3>Pokémon SoulSilver i HeartGold</h3>
            <p>
              Pokémon SoulSilver (jpn. ポケットモンスター ソウルシルバ) i
              HeartGold (jpn. ポケットモンスター ハートゴールド) su "reamke"-ovi
              druge genearcije igara s "Game Boy Color". Igra više manje prati
              istu priču kao stare igrice, ali se može povezati s "Platinum",
              "Diamond" i "Pearl" kako bi uz razmjenu ispunili pokedex. Igricu
              su imale poboljšanu grafiku i dolazile su uz "Pokéwalker" koji je
              bio pedometar koji je nagrađivao korisnike kako su šetali s mini
              igrama. Igrica se prodavala u Japanu 2009., dok su ju ostala
              tržišta dobila 2010. godine.
            </p>
          </div>
          <div class="col-md-4 text-white">
            <h1>Naslovnice</h1>
            <div class="row">
              <img
                class="col-md-6"
                src="../assets/slike/pkmn_diamond.jpg"
                alt="Pokemon Diamond"
              />
              <img
                class="col-md-6"
                src="../assets/slike/pkmn_pearl.jpg"
                alt="Pokemon Pearl"
              />
            </div>
            <br /><br /><br /><br />
            <div class="row">
              <img
                class="col-md-6"
                src="../assets/slike/pkmn_platinum.jpg"
                alt="Pokemon Platinum"
              />
              <img
                class="col-md-6"
                src="../assets/slike/pkmn_platinum_jpn.jpg"
                alt="Pokemon PlatinumJpn"
              />
            </div>
            <br /><br /><br /><br />
            <div class="row">
              <img
                class="col-md-6"
                src="../assets/slike/pkmn_soulsilver.jpg"
                alt="Pokemon SoulSilver"
              />
              <img
                class="col-md-6"
                src="../assets/slike/pkmn_heartgold.jpg"
                alt="Pokemon HeartGold"
              />
            </div>
          </div>
        </div>
    </main>
    <footer class="container-fluid bg-dark text-center text-white text-lg-start">
        <?php include './footerKonzole.html'; ?>
    </footer>  
  </body>
</html>
