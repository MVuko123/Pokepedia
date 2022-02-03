<?php

include_once './snippets/konekcija.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include './snippets/provjeraTima.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/css.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true"></script>
    <link rel="shortcut icon" type="image/png" href="assets/slike/poke_fav.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Poképedia</title>
</head>

<body id="pocetna-body">
    <header><?php include './navbar.php'; ?></header>
    <main>
        <div class="container-fluid my-5">
            <div class="row">
                <!-- <button
                    type="button"
                    class="btn btn-outline-dark btn-floating"
                    id="btn-back-to-top"
                    >
                    <img src="./assets/slike/to_top.png" alt="" style="max-width: 32px" />
                 </button> -->
                <div class="col-md-3 my-3 my-md-0">
                    <h3 class="yt_kanal">Službeni Pokémon YouTube Kanal</h3>
                    <div class="elfsight-app-9ad27e5f-f310-4f24-94ba-3008b75664d0"></div>
                </div>
                <div class="col-md-6 text-white" id="testni_div">
                    <h1 class="my-3 my-md-0">Pokémon Tvrtka</h1>
                    <p>
                        Pokémon Tvrtka je osnovana 23.travnja.1998., te je iste
                        godine započela s radom. Tvrtka je nastala zajedničkim ulagnjem
                        triju korporacija (Nintendo, Game Freak Inc. i Creatures Inc.),
                        koje zajedno drže autorska prava na Pokémon franšizu. Nadimak
                        Pokemon Ltd. koji nosi i sad je poprimila tek 2000.godine.,
                        sjedište je u Tokyu. Uz glavno središte u Japanu koje se brine za
                        cijelu Aziju (osim Južne Koreje), Australiju i Novi Zeland,
                        postoje još dvije podružnice koje se brinu za ostala tržišta,
                        "Pokémon Korea" se brine za Južnu Koreju, dok se "The Pokemon
                        Company International" brine za sva ostala tržišta.
                    </p>
                    <h1 class="my-3">Pokémon</h1>
                    <p>
                        Pokémon (jpn. ポケモン ) je skrraćenica od "Pocket Monsters (jpn.
                        ポケットモンスタ - Poketto Monsutā ) ", to je multimilijunska
                        Nintendova franšiza. Stvorio ju je Satoshi Tajiri 1995.godine.
                        Franšiza je započela s videoigrama na GameBoy konzoli, iz toga su
                        se razvile animirane serije, manga stripovi, TCG, akcijske figure,
                        plišane igračke i razne druge stvari. Naziv prve igre je bio
                        "Pocket Monsters", no 1996. radi unutarnjih problema u Nintendu
                        dolazi promjena imena u "Pokémon". Moto igrice na japanskome bio
                        je "Pokémon Getto Daze!", na engleskome je bio "Gotta catch 'em
                        all!", dok je na hrvatskome bio "Moraš skupit' sve!". U prvoj igri
                        bilo je "samo" 151-og Pokémona, dok je danas taj broj stigao čak
                        do 898 Pokémona, s još puno njih na putu.
                    </p>
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
                    <div class="row">
                        <?php if ($_SESSION['imatim']) include './snippets/korisnik_team.php'; ?>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-md-3">
                    <h3 class="text-white text-center">
                        Službeni Pokémon Twitter Račun
                    </h3>
                    <a class="twitter-timeline" data-height="76.5vh" data-theme="dark" href="https://twitter.com/Pokemon?ref_src=twsrc%5Etfw">Tweets by Pokemon</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    </main>
    <footer class="bg-dark text-center text-white text-lg-start mx-0px">
        <?php include './snippets/footer.html'; ?>
    </footer>
</body>

</html>