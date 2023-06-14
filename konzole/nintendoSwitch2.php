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
  <body id="nintendoswitch2">
  <header><?php include './navbarKonzole.php'; ?></header>
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
              src="../assets/slike/nintednoSwitch.jpg"
              alt="Nintendo Switch"
            />
          </div>
          <div class="col-md-4 text-white" id="testni_div">
            <h1>Igrice</h1>
            <h3>Pokémon Legends Arceus</h3>
            <p>
              Pokémon Legends Arceus (jpn.Pokémon LEGENDS アルセウス) 
              je peta i posljednja igrica u osmoj generaciji pokemona. Radnja
              igrice se odvija u regiji "Hisui" koja je zapravo ista regija 
              kao i "Sinnoh" samo u dalekoj prošlosti. Igrica je uvela samo 9 
              novih pokemona, i sveukupno je zadržavala 241 pokemona. Igrica 
              se istaknula po tome što se po prvi puta kompletno promijenila 
              dinamika igrice, odmah na početku igrica je bila "open world",
              hvatanje pokemona, borbe i istraživanje je bilo sasvim drugačije
              od prošlih igrica. Prvi puta nakon Let's go Pikachu i Eevee shiny
              pokemoni su bili vidljivi i prije nego što igrač uđe u borbu, nova
              stvar u igrici je bila "mass outbreaks" u kojima se pojavljuje po
              jedan pokemon koji ima veću šansu da bude shiny, kasnije je igrica 
              dobila mali besplatni DLC u kojemu su popravljene određene stvari te
              su uvedeni "massive mass outbreaks" koji su igračima dali jako puno 
              sadržaja za "post-game". Igrica je najavljena u cijelom svijetu 27. 
              veljače 2021.godine za obljetnicu 25. godina od objave "Pokémon Red 
              i Green", u prodaju je puštena 28. siječnja 2022. godine.
            </p>
            <h3>Pokémon Scarlet i Violet</h3>
            <p>
              Pokémon Scarlet (jpn. ポケットモンスター スカーレット) i Violet 
              (jpn. ポケットモンスター バイオレット) su prve igrice koje nas 
              uvode u za sada posljednju devetu generaciju pokemona, radnja 
              igrice se odvija u regiji "Paldea" koja je ne službeno napravljena 
              po Španjolskoj. Regija je uvela novih 107 pokemona i 4 regionalne 
              varijante, s tim je prvi puta pokedex tj. ukupan broj pokemona prešao
              broju od 1000. Kao i zadnja igrica u 8. generaciji, i ovdje su shiny
              pokemoni ostali vidljivi u "over-world" apsketu igrice, ali je maknut
              zvuk shiny pokemona, isto tako kao i prošla igrica zadržao se apsketu 
              "open-world" igrice što je privuklo jako puno igrača iako s grafičke
              strane igrica nije briljirala. Novi "gimmick" koji je uveden je bio 
              "terastallization" koji je pokemonima dodavao novi tip te napade kojima
              oni inače nemaju pristupa. Kao i prošla "main line" igrica sadržava 
              "Terastallization Battles" u kojima se treneri bore protiv jakog pokemona
              za određene nagrade. Igrica je najavljena 18. studenog 2022. godine, a 
              objavljena je 27. veljače 2022. godine na "Pokémon day". Nova dva DLC-a
              su najavljena 27. veljače 2023. godine.
            </p>
          </div>
          <div class="col-md-4 text-white">
            <h1>Naslovnice</h1>
            <div class="row">
              <img
                class="col-md-6"
                src="../assets/slike/arceus.jpg"
                alt="Pokemon Legends Arceus"
              />
              <img
                class="col-md-6"
                src="../assets/slike/arceus2.jpg"
                alt="Pokemon Legends Arceus Japan"
              />
            </div>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <div class="row">
              <img
                class="col-md-6"
                src="../assets/slike/scarlet.jpg"
                alt="Pokemon Scarlet"
              />
              <img
                class="col-md-6"
                src="../assets/slike/violer.jpg"
                alt="Pokemon Violet"
              />
            </div>
          </div>
        </div>
        <footer class="container-fluid bg-dark text-center text-white text-lg-start">
        <?php include './footerKonzole.html'; ?>
        </footer>  
      </div>
    </main>
  </body>
</html>
