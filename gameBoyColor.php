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
  <body id="gameBoyColor">
  <header><?php include './navbar.php'; ?></header>
    <main class="mt-5">
      <div class="container-fluid">
        <div class="row container-fluid">
          <div class="col-md-4 text-white" id="testni_div">
            <h1>Game Boy Color</h1>
            <p>
              "Game Boy Color" (GBC) kao i njegov prethodnik "Game Boy" je konzola
              koja stane u dlan ruke. Najveća razlika od svoga prethodnika je
              bila u tome što je ekran bio u boji, a ne crno-bijeli. Bio je
              kompatibilan sa većinom igrica kao i njegov prethodnik, neki od
              najboljih naslova su bili "Pokémon Gold and Silver", "The Legend
              of Zelda" ( u više svojih izdanja), "Pokémon Crystal", "Super
              Mario Brod. Deluxe", "Yu-Gi-Oh! Dark Duel Stories" i mnoge druge.
              Konzola je prvo u prodaju puštena u Japanu(21.listopada.1998.),
              nakon toga u studenome iste godine je puštena na tri tržišta koja
              su bila Sjeverna Amerika, Europa i Australija, dok je na svoje
              zadnje tržište u Južnoj Koreji stigla tek 2000. Zajedno sa svojim
              prethodnikom je prodano preko 118.69 milijuna kopija diljem
              svijeta.
            </p>
            <img class="col-md-6" src="../assets/slike/gameBoyColor.jpg" alt="Game Boy Color" />
          </div>
          <div class="col-md-4 text-white" id="testni_div">
            <h1>Igrice</h1>
            <h3>Pokémon Gold i Silver</h3>
            <p>
              Pokémon Gold (jpn. ポケットモンスター　金 ) i Silver (jpn.
              ポケットモンスター　銀 ) su bile prve igrice za takozvanu drugu
              generaciju pokemona. Regija u kojoj se igrica dešava se zove Johto
              i isto je jedna od regija Japana. Igrica je sadržavala "samo" 100
              novih pokémona. Igrica je puštena u prodaju prvo u Japanu
              (15.listopada.1999.), skoro na isti dan nakon godinu dana igrica
              je puštena na Sjeverno Američko, i Australsko tržište, nakon njih
              je slijedila Europa (6.travnja.2001.) i Južna Koreja
              (25.travnja.2002.).
            </p>
            <h3>Pokémon Crystal</h3>
            <p>
             Pokémon Crystal (jpn. ポケットモンスター　クリスタルバージョン) je
              direktan nastavank na prethodnike. Igra je imala neke nove stvari
              kao da se može sada igrati kao ženski lik, dok se prije moglo samo
              kao muški. Japanska verzija je imala malo više novih stvari kao
              povezivanje s mobitelom. Nova stvar je isto bila "Battle Tower"
              koji je bio fokusiran na pokémona "Suicune", koji je i prikazan na
              naslovnici. Igrica je prvo puštena u Japanu (14.prosinca.2000.),
              dok su sva ostala tržišta u Sjevernoj Americi, Europi i Asutraliji
              dobili igricu godinu dana nakon.
            </p>
          </div>
          <div class="col-md-4 text-white">
            <h1>Naslovnice</h1>
            <div class="row">
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_gold.jpg"
                alt="Pokemon Gold"
              />
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_silver.jpg"
                alt="Pokemon Silver"
              />
            </div>
            <div class="row">
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_crystal.jpg"
                alt="Pokemon Crystal"
              />
              <img
              class="col-md-6"
              src="./assets/slike/pkmn_crystal_jpn.jpg"
              alt="Pokemon CrytaslJpn"
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
