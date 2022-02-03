<?php

include './snippets/konekcija.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['role']) || ($_SESSION['role'] != 'admin' && $_SESSION['role'] != 'owner')) header('Location: ./index.php');


include './snippets/provjeraTima.php';


/* ! Dohvati pokemone u trenutnom timu */
$imatim = false;
$timpun = false;
$koliko = 0;
$provjeraTim = "SELECT * FROM tim WHERE korisnik='$_SESSION[id]'";
$result = mysqli_query($conn, $provjeraTim);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $pokemoniutimu[$koliko] = $row['pokemon'];
        $koliko++;
    }
} else {
}


if (mysqli_num_rows($result) == 0) {
    $imatim;
} else if (mysqli_num_rows($result) >= 3) {
    $timpun = true;
}

//if ($timpun) echo '<h1>NEMOŽE</h1>';

$korisnikSql = "SELECT * FROM korisnik";

$korisnikQuery = mysqli_query($conn, $korisnikSql) or die(mysqli_error($error));


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/css.css" />
    <link rel="stylesheet" href="./assets/css/teambuilder.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true"></script>
    <link rel="shortcut icon" type="image/png" href="./assets/slike/poke_fav.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Poképedia</title>
</head>


<body id="dashboard-body">
    <header><?php include './navbar.php'; ?></header>
    <main>
        <div class="container-fluid mt-5">
            <h1 class="text-center text-white py-3 mb-5">Admin Dashboard</h1>
            <div class="row">
                <?php
                while ($korisnikRow = mysqli_fetch_array($korisnikQuery)) { ?>
                    <div class="col-md-4 row text-center mx-auto my-2">
                        <div class="p-3 mb-4 cardKorisnik" id="korisnikCardPrednja-<?php echo $korisnikRow['id']; ?>">
                            <div class="col-md-12">
                                <p>Korisničko ime:<br>
                                    <?php
                                    if ($korisnikRow['uloga'] == 'owner')
                                        echo '<span class="ulogaa-' . $korisnikRow['id'] . ' h2" id="ownerH2">';
                                    else if ($korisnikRow['uloga'] == 'admin')
                                        echo '<span class="ulogaa-' . $korisnikRow['id'] . ' h2" id="adminH2">';
                                    else
                                        echo '<span class="ulogaa-' . $korisnikRow['id'] . ' h2 text-info">';
                                    echo $korisnikRow['nadimak'] . '</span>';
                                    ?>
                                </p>
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <p>Elektronička pošta:<br>
                                    <span class="h3"><?php echo $korisnikRow['email']; ?></span>
                                </p>
                            </div>
                            <div class="col-md-12">
                                <p>Uloga:<br>
                                    <span class="h3"><?php echo $korisnikRow['uloga']; ?></span>
                                </p>
                            </div>
                            <?php if ($korisnikRow['uloga'] != 'owner') { ?>
                                <div class="row pt-3 mt-3">
                                    <?php if ($_SESSION['role'] == 'owner') {
                                        echo '<div class="col-md-6">';
                                    } else {
                                        echo '<div class="col-md-12">';
                                    } ?>
                                    <a href="./snippets/obrisiKorisnika.php?id=<?php echo $korisnikRow['id']; ?>" class="btn btn-danger btn-sm w-100 <?php if ($_SESSION['id'] == $korisnikRow['id'] || ($korisnikRow['uloga'] == 'admin' && $_SESSION['role'] != 'owner')) echo 'd-none'; ?>">Obriši korisnika</a>
                                </div>
                                <div class=" col-md-6">
                                    <?php if ($_SESSION['role'] == 'owner') {
                                        if ($korisnikRow['uloga'] != 'admin') { ?>
                                            <a href="./snippets/postaviAdmina.php?id=<?php echo $korisnikRow['id']; ?>&param=true" class="btn btn-success btn-sm w-100">Postavi admina</a>
                                        <?php } else { ?>
                                            <a href="./snippets/postaviAdmina.php?id=<?php echo $korisnikRow['id']; ?>&param=false" class="btn btn-warning btn-sm w-100">Ukloni admina</a>
                                    <?php }
                                    } ?>
                                </div>
                        </div>
                    <?php } ?>
                    </div>
                    <div class="p-3 d-none cardKorisnik" id="korisnikCardZadnja-<?php echo $korisnikRow['id']; ?>">
                        <div class="col-md-12">
                            <?php
                            $id = $korisnikRow['id'];
                            $timSql = "SELECT p.naziv, p.prednjaSlika, p.prviTip, p.drugiTip, p.opis, p.prednjaSSlika, p.id, t.pokemon FROM pokemon as p, tim as t WHERE korisnik='$id' and p.id=t.pokemon";
                            $timQuery = mysqli_query($conn, $timSql) or die(mysqli_error($error)); ?>
                            <div class="row">
                                <?php if (mysqli_num_rows($timQuery) < 1) { ?>
                                    <div class="col-md-12">
                                        <div style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid black; border-radius: 0.5rem" ;>
                                            <h1 class="text-center">Korisnik nema tim.</h1>
                                        </div>
                                    </div>
                                <?php } ?>

                                <?php while ($poke = mysqli_fetch_array($timQuery)) { ?>
                                    <div class="col-md-12 mx-auto text-center">
                                        <div class="row py-2 m-1" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid black; border-radius: 0.5rem;">
                                            <div class="col-md-12 text-center">
                                                <span class="h5"><?php echo $poke['naziv']; ?></span>
                                            </div>
                                            <div class="col-md-4">
                                                <img id='pok2' src=" <?php echo $poke['prednjaSlika']; ?>" />
                                            </div>
                                            <div class="col-md-4">
                                                <img id='pok2' src=" <?php echo $poke['prednjaSSlika']; ?>" />
                                            </div>
                                            <div class="col-md-4 my-2 text-center">
                                                <div class="col-md-12 my-3 text-center">
                                                    <span class="type <?php echo $poke['prviTip']; ?>"></span>
                                                </div>
                                                <?php if ($poke['drugiTip'] != NULL) { ?>
                                                    <div class="col-md-12 my-3 text-center">
                                                        <span class="type <?php echo $poke['drugiTip']; ?>"></span>
                                                    </div>
                                                <?php } else { ?>
                                                    <span></span>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
            </div>
            <script>
                $(".ulogaa-<?php echo $korisnikRow['id']; ?>").on("click", function() {
                    $("#korisnikCardPrednja-<?php echo $korisnikRow['id']; ?>").addClass("d-none");
                    $("#korisnikCardZadnja-<?php echo $korisnikRow['id']; ?>").removeClass("d-none");
                });
                $("#korisnikCardZadnja-<?php echo $korisnikRow['id']; ?>").on("click", function() {
                    $(this).addClass("d-none");
                    $("#korisnikCardPrednja-<?php echo $korisnikRow['id']; ?>").removeClass("d-none");
                });
            </script>
        <?php } ?>
        </div>
        </div>
    </main>
    <footer class="bg-dark text-center text-white text-lg-start">
        <?php include './snippets/footer.html'; ?>
    </footer>
</body>

</html>