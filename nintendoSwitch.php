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
  <body id="nintendoSwitch">
  <header><?php include './navbar.php'; ?></header>
    <main class="mt-5">
      <div class="container-fluid">
        <div class="row container-fluid">
          <div class="col-md-4 text-white" id="testni_div">
            <h1>Nintendo Switch</h1>
            <p>
              Nintendo Switch (NX) je nasljednik Nintendove konzole "Wii U". Ovo
              je konzola koja se može koristiti kod kuće kao njegov prethonik
              Wii, ali se isto može nositi sasobom i igrati bilo gdje,
              kontroleri s lijeve i desne se mogu skinuti da bi se ostatak
              konzole stavio u uređaj koji prenosi sliku na veliki ekran i tako
              se igre mogu igrati na boljem i prostranijem ekranu. To je prva
              hibridna konzola koja se može koristiti kao oboje. Konzola je
              puštena u prodaju u cijelome svijetu 3.ožujka.2017.godine. Za sada
              napravljene su još dvije iteracije konzole. Prva je bila "Nintendo
              Switch Lite" koji je "rezao" uglove da smanji cijenu, tako se
              uređaj može koristiti samo u rukama, a ne na velikom ekranu, ekran
              je imao samo rezoluciju od 720p, strijelice su zamjenjene samo s
              jednom gljivicom, i neke igre koje su zahtjevale pokrete kao Super
              Mario Party nisu bile dostupe radi toga što "IR Motion Camera"
              nije bila na uređaju. Konzola je puštena u prodaju u cijelome
              svijetu 20.rujna.2019.godine. Druga iteracija je bile "Nintendo
              Switch OLED Model" koja je imala 7" OLED ekran, dok je sve ostalo
              bilo isto kao i na regularnoj verziji, pušten je u prodaju
              8.listopada.2021. u cijelome svijetu. Po trenutnim brojevima sve
              iteracije su zajedno prodale oko 89 milijuna uređaja u svijetu.
              Dok je najprodavanije igrica bila "Mario Kart 8 Deluxe" koja je
              prodana u oko 37 milijuna kopija.
            </p>
            <img
              class="col-md-12"
              src="./assets/slike/nintednoSwitch.jpg"
              alt="Nintendo Switch"
            />
          </div>
          <div class="col-md-4 text-white" id="testni_div">
            <h1>Igrice</h1>
            <h3>Pokémon Let's Go, Pikachu! i Let's Go, Eevee!</h3>
            <p>
              Pokémon Let's Go, Pikachu! (jpn. ポケットモンスター Let's Go!
              ピカチュウ) i Let's Go, Eevee! (jpn. ポケットモンスター Let's Go!
              イーブイ) su napravljeni tako što je spojena priča iz "Pokemon
              Yellow" igrice iz 1998. i mehanika igrice iz "Pokemon GO". Igrica
              uključuje 151 orginalog pokemona iz "Kanto" regije i 18 formi iz
              "Alola" regije. Razlika od proslih igara je bila da nema borbe s
              divljim pokemonima nego iz se hvatalo s PokeLoptom, tako da se
              kontolerima simulira bacanje lopte.Igrica je bila puštena u
              cijelome svijetu 16.studenog.2018.godine. Radi toga što je
              preuzeta mehanika hvatanja iz "Pokemon GO", igrica se mogla
              spojiti s mobilnom aplikacijom kako bi u obje igrice dobili
              pogodnosti.
            </p>
            <h3>Pokémon Sword i Shield</h3>
            <p>
              Pokemon Sword (jpn. ポケットモンスター ソード) i Shield (jpn.
              ポケットモンスター シールド) su prve igrice koje nas uvode u za
              sada posljednju osmu generaciju pokemona, radnja igrice se odvija
              u regiji "Galar". Igrice su po prvi puta imale takozvane "DLC"-ove
              po imenu "Expansion Pass" u kojima su igrači dobili pristup
              dvijema novim regijama i tako su proširili priču. Regija je uvela
              svukupno 81 novoga pokemona i 13 regionalnih varijanti. Uvedene su
              nove značajke kao "Wild Area" gdje igrač po prvi puta može vidjeti
              divlje pokemone i odabrati što želi uhvatiti, dok se prije moralo
              šetati po travi bez znanja što će iskočiti.Igra je isto uvela
              "Dynamax" i "Gigantmax" pojmove, "Dynamax" je omogućavao svim
              pokemonima iz "Galar" regije da postanu veliki i koriste novi
              potez "Max Move", a "Gigantmax" je isto mjenjao izgled, ali samo
              određenih pokemona, kao i s "Dynamax" dobije se novi potez "G-Max
              Move". Uvedenu se "Max Raid Battles" u kojima se treneri mogu s
              još tri igrača boriti protiv nekog pokemona. Igrica je objavljena
              15.studenog.2019. u cijelome svijetu.
            </p>
            <h3>Pokémon Brilliant Diamond i Shinning Pearl</h3>
            <p>
              Pokémon Brilliant Diamond (jpn. ポケットモンスター
              ブリリアントダイヤモンド) i Shinning Pearl (jpn.
              ポケットモンスター シャイニングパール ) su poboljšane vezije igara
              iz četvtke generacije. Razlike s obzirom na stare igrice su da je
              grafika jako poboljšana, "The Underground" je sada "Grand
              Underground" s vidljivim divljim pokemonima, "HM"-ovi se više ne
              koriste nego se svi nalaze u "Pokétch"-u. Većina stvari koja je
              dodana nakon četvrte generacije se nalazi u BSDP igricama. Igrica
              je puštena u prodaju 19.studenog.2021. u cijelome svijetu.
            </p>
          </div>
          <div class="col-md-4 text-white">
            <h1>Naslovnice</h1>
            <div class="row">
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_letsgoPikachu.jpg"
                alt="Pokemon LetsGoPikachu"
              />
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_letsgoEevee.jpg"
                alt="Pokemon LetsGoEevee"
              />
            </div>
            <div class="row">
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_sword.jpg"
                alt="Pokemon Sword"
              />
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_shield.jpg"
                alt="Pokemon Shield"
              />
            </div>
            <div class="row">
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_brilliantdiamond.jpg"
                alt="Pokemon Brilliant Diamond"
              />
              <img
                class="col-md-6"
                src="./assets/slike/pkmn_shinningpearl.jpg"
                alt="Pokemon Shinning Pearl"
              />
            </div>
          </div>
        </div>
        <footer class="container-fluid bg-dark text-center text-white text-lg-start">
        <?php include './snippets/footer.html'; ?>
        </footer>  
      </div>
    </main>
  </body>
</html>
