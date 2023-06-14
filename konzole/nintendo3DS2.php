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
  <body id="nintendo3DS2">
  <header><?php include './navbarKonzole.php'; ?></header>
    <main class="mt-5">
      <div class="container-fluid">
        <div class="row container-fluid">
          <div class="col-md-4 text-white" id="testni_div">
            <h1>Nintendo 3DS</h1>
            <p>
              Nintendo 3DS (3DS ili N3DS) je nasljednik nintenda DS, kao što mu
              i ime govori ova konzola je prikazivala nove igrice u 3D-u. Kupci
              koji su kupili konzolu prije nego što je cijena bila snižena
              dobili su na poklon deset starih "GBA" igrica, ali naravno nisu
              bile prikazane u 3D-u. Konzola ima detekciju pokreta i giroskop
              koji je služio za interakciju s igrama , isto tako konzola je
              imala analogni "Circle Pad" kao novu značajku. Konzola je isto
              imala kamere s kojima su korisnici mogli slikati stvari i onda ih
              gledati u 3D-u. Postojala je isto opcija da se odabere kolko
              "duboko" korisnik želi da 3D ide, isto tako je postojala opcija da
              se totalno isključi 3D fukncionalnost. Konzola je imala još pet
              iteracija 3DS XL, 2DS, New 3DS, New 3DS XL i New 2DS XL, zajedno
              sa svim tim iteracijama konzola je prodala oko 76 milijuna
              jedinica. Konzola se počela prodavati 2011. i 2012. na tržištima u
              Japanu, Europi, Sjevernoj Americi, Australiji,Južnoj Koreji, Novom
              Zelandu, Indiji, Brazilu, Hong Kongu, Kini i Tajvanu (Republika
              Kina), dok su se iteracije prodavale skroz do 2020.. Za razliku od
              proslih konzola najprodavanije igrica nije bila od Pokémona nego
              je bila "Mario Kart 7" iz 2011.
            </p>
            <img
              class="col-md-8"
              src="../assets/slike/nintedno3DS.jpg"
              alt="Nintendo 3DS"
            />
          </div>
          <div class="col-md-4 text-white" id="testni_div">
            <h1>Igrice</h1>
            <h3>Pokémon Sun i Moon</h3>
            <p>
              Pokémon Sun (jpn. ポケットモンスターサン) i Moon (jpn.
              ポケットモンスタームーン) su prve igrice koje nas uvode u "Alola"
              regiju. Regija je uvela 104 nova pokemona s time da su njih 18
              bili nove verzije pokemona iz prve "Kanto" regije. Za razliku od
              prethodnih igara gdje su se igrači borili protiv "gym leadera",
              ovdje je igrač morao proći sedam "island challange"-a. Uvedeni su
              i takozvani Z-Potezi koje pokemon može napraviti jednom tijekom
              bitke ako pokemon ima odgovarajući Z-Kristal. Za razliku od
              proslih igara treneri su sada vidljivi u bitkama, donji ekran
              pokazuje pokemone i njihove statuse, zajedno s ostalim tipkama.
              Igrica je puštena u prodaju 18.studenog.2016. u cijelome svijetu
              osim Europi, tamo je igrica bila dostupa 23.studenog.2016.
            </p>
            <h3>Pokémon Ultra Sun i Ultra Moon</h3>
            <p>
              Pokémon Ultra Sun (jpn. ポケットモンスター ウルトラサン ) i Ultra
              Moon (jpn. ポケットモンスター ウルトラムーン) nisu direktni
              nastavci na prethodnike nego su samostalne igrice sa sličnom
              pričom koja se dešava u alternativnoj stvarnosti. Kao što se vidi
              na naslovnicama "Solgaleo" i "Lunala" su spojeni radi utjecaja
              "Necrozoma" i imaju nove forme, na naslovnici "Ultra Sun" je "Dusk
              Mane Necrozoma" i na naslovnici "Ultra Moon" je "Dawn Wing
              Necrozoma". Dodani su novi pokemoni iz prethodnik generacija koji
              nisu bili dostupnu u prethodnik igrama. Uvedena je nova stvar
              "Power Ring" koji daje Z-Napade određenim pokemonima, isto tako je
              "Ultra Space" proširen radi dodavanja novih "Ultra Beasts". Igrica
              je puštena u prodaju u cijelome svijetu 17.studenog.2017.godine.
            </p>
          </div>
          <div class="col-md-4 text-white">
            <h1>Naslovnice</h1>
            <div class="row">
              <img
                class="col-md-6"
                src="../assets/slike/pkmn_sun.jpg"
                alt="Pokemon Sun"
              />
              <img
                class="col-md-6"
                src="../assets/slike/pkmn_moon.jpg"
                alt="Pokemon Moon"
              />
            </div>
            <br /><br /><br /><br /><br /><br /><br /><br />
            <div class="row">
              <img
                class="col-md-6"
                src="../assets/slike/pkmn_ultrasun.jpg"
                alt="Pokemon Ultra Sun"
              />
              <img
                class="col-md-6"
                src="../assets/slike/pkmn_ultramoon.jpg"
                alt="Pokemon Ultra Moon"
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
