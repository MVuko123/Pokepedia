
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
    <link rel="shortcut icon" type="image/png" href="./assets/slike/poke_fav.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../assets/skripte/include.js"></script>
    <title>Poképedia</title>
  </head>
  <body id="gameBoyAdvanced">
  <header><?php include './navbar.php'; ?></header>
    <main class="mt-5">
      <div class="container-fluid">
        <div class="row container-fluid">
          <div class="col-md-4 text-white" id="testni_div">
            <h1>Game Boy Advanced</h1>
            <p>
              Game Boy Advance (GBA) je imao 32-bitni sustav. Bio je treća i
              posljednja iteracija konzola "Game Boy". Imao je 2.9 inchni LCD
              ekran u boji, koji nije imao pozadinsko osvjetljenje, tako da za
              njega mogla kupiti takozvana lampa koja bi osvjetljavala ekran po
              mraku. Kasnijom iteracijom "Game Boy Advanced Special Edition" ova
              mana je bila popravljena i ekran je imao pozadinsko osvjetljenje.
              Zajedno s trećom iteracijom, a to je "Game Boy Advanced Micro",
              prodano je malo manje od 82 milijuna kopija. Spram svojih
              prethodnika ova konzola je bila dostupa u dosta više tržišta. Prvo
              je puštena na tržište u Japanu i na novo tržište u Brazilu
              (21.ožujka.2001.), u lipnju iste godine kontrola je puštena na
              Europsko, Australijsko, Sjeverno Američko i na novo Indijsko
              tržište, tri godine nakon konzola je puštena na Južno Korejsko i
              na dva nova tržišta, Kinesko i Tajvansko(Republika Kina).
            </p>
            <img class="col-md-12" src="./assets/slike/gameBoyAdvanced.jpg" alt="Game Boy Advanced" />
          </div>
          <div class="col-md-4 text-white" id="testni_div">
            <h1>Igrice</h1>
            <h3>Pokémon Ruby i Sapphire</h3>
            <p>
              Pokémon Ruby (jpn. ポケットモンスタールビ) i Sapphire (jpn.
              ポケットモンスターサファイア) su bile uvod u treću generaciju
              pokemona. Radnja igre se odvijala u Hoenn regiji koja je zasnovana
              na južnome Japanu. Igra je uvela 135 novih pokemona i dovela je do
              velikih grafičkih poboljšanja, u udnosu na prethodne igre. Igrice
              se prvo puštene na Japansko tržište (21.studenog.2002.), a
              sljedeće godine igrica izlazi na Sjeverno Američko
              (19.ožujak.2003.), Australsko (3.travanj.2003.) i Europsko
              (25.srpanj.2003.) tržište.
            </p>
            <h3>Pokémon Emerald</h3>
            <p>
              Pokémon Emerald (jpn. ポケットモンスターエメラルド) je zadnja
              igrica u Hoenn regiji. Emerald se od dvije prethodne igrice
              razlikuje po tome što je opširnija, mogu se uhvatiti sva 3
              legendarna Pokémona iz Hoenn-a, Tim Aqua i Magma se pojavljuju,
              nakon pređene igrice igrač može dobiti jednog od početnih pokemona
              iz prošle regije (Johto), poboljšana je grafika, uveden je pojam
              "Battle Frontier" gdje se igrači mogu međusobno boriti i "pokenav"
              koji pokazuje mapu regije i koji treneri žele rematch. Japanska i
              Tajvanska verzija igrice su bile posebne su jer jedine igrice u
              kojima je shiny Mew bio dostupan igračima uz pomoć "The Old Sea
              Map" koji ih vodi na "Faraway Island". Igrica je puštena u pevo u
              Japanu (16.rujna.2004.), a godinu dana poslije na Sjeverno
              Američko, Europsko i Australsko tržište.
            </p>
            <h3>Pokémon LeafGreen i FireRed</h3>
            <p>
              Pokémon LeafGreen (jpn. ポケットモンスターリーフグリーン ) i
              FireRed (jpn. ポケットモンスターファイアレッド) su prvi
              "remake"-ovi u pokemon franšizi. Igre su poboljšane verzije starih
              "Pokémon Red i Green" igrica za "Game Boy". Igre se baziraju na
              istoj priči kao i prije ali imaju unaprijeđenu grafiku, dodani su
              novi pokemoni, novi napadi i novi dijalozi. Igirca je na sva
              tržišta izašla 2004.godine, prvo u siječnju u Japanu, a zadnje u
              Europi u listopadu.
            </p>
          </div>
          <div class="col-md-4 text-white">
            <h1>Naslovnice</h1>
            <div class="row">
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_ruby.jpg"
                alt="Pokemon Ruby"
              />
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_sapphire.jpg"
                alt="Pokemon Sapphire"
              />
            </div>
            <br /><br /><br />
            <div class="row">
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_emerald.jpg"
                alt="Pokemon Emerald"
              />
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_emerald_jpn.jpg"
                alt="Pokemon EmeraldJpn"
              />
            </div>
            <br /><br />
            <div class="row">
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_leafgreen.jpg"
                alt="Pokemon LeafGreen"
              />
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_firered.jpg"
                alt="Pokemon FireRed"
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
