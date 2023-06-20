<?php

include './snippets/konekcija.php';
include './snippets/provjeraTima.php';
$output = "";

if (!isset($_SESSION['id'])) header('Location: ./index.php');



if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


function isInTeam($pokeId, $team)
{
    $isInTeam = false;
    foreach ($team as &$teamPoke) {
        if ($pokeId == $teamPoke) {
            $isInTeam = true;
        }
    }
    return $isInTeam;
}


$imatim = false;
$timpun = false;
$koliko = 0;

/* ! Dohvati pokemone u trenutnom timu */
$pokemoniutimu = [];
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


$sql = "SELECT * FROM pokemon";


if (isset($_POST['search'])) {

    $search_term = mysqli_real_escape_string($conn, $_POST['search_box']);

    if ($search_term == "") $sql;
    else {
        $sql .= " WHERE naziv='{$search_term}'";
        $sql .= " OR id='{$search_term}'";
        $sql .= " OR prviTip='{$search_term}'";
        $sql .= " OR drugiTip='{$search_term}'";
    }
}

$query = mysqli_query($conn, $sql) or die(mysqli_error($error));


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true"></script>
    <link rel="shortcut icon" type="image/png" href="assets/slike/poke_fav.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/teambuilder.css">
    <link rel="stylesheet" href="assets/css/css.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Poképedia</title>
</head>

<body>
    <header>
        <?php include './navbar.php'; ?>
    </header>
    <main>
        <div class="container-fluid mt-5">
            <div class="row justify-contet-between align-items-center">
                <div class="col-md-9 text-center">
                    <h1>Team Builder - Pokemon Picker</h1>
                </div>
                <div class="col-md-3 text-end">
                    <form name="search_form" class="row g-3" method="POST" action="teamBuilder.php">
                        <div class="col-auto">
                            <input class="form-control" type="text" name="search_box" value="" placeholder="Pretražite prvu generaciju" />
                        </div>
                        <div class="col-auto">
                            <input type="submit" class="btn btn-outline-success" name="search" value="Traži" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <?php
                while ($row = mysqli_fetch_array($query)) {
                    if ($row['id'] < 152) { ?>
                        <div class="col-md-4 p-3">
                            <div class="border text-center p-3" id="pokemonCard">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1 id="modalName" class="my-3" data-bs-toggle="modal" data-bs-target="#pokemonModal-<?php echo $row['id']; ?>"><?php echo $row['naziv']; ?><span class="text-muted h3">
                                                <?php if ($row['id'] < 10) {
                                                    echo '#00' . $row['id'];
                                                } else if ($row['id'] > 9 && $row['id'] < 100) {
                                                    echo '#0' . $row['id'];
                                                } else {
                                                    echo '#' . $row['id'];
                                                } ?>
                                            </span></h1>
                                    </div>
                                    <div class="col-md-12">
                                        <span class="type <?php echo $row['prviTip']; ?>"></span>
                                        <?php if ($row['drugiTip'] != NULL) { ?>
                                            <span class="type <?php echo $row['drugiTip']; ?>"></span>
                                        <?php } else { ?>
                                            <span></span>
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-6 text-center p-3">
                                        <p class="mt-3">Normal </p>
                                        <img id="prednjaS-<?php echo $row['id']; ?>" class="d-inline" src="<?php echo $row['prednjaSlika']; ?>" />
                                        <img id="zadnjaS-<?php echo $row['id']; ?>" class="d-none" src="<?php echo $row['zadnjaSlike']; ?>" />
                                    </div>
                                    <div class="col-md-6 text-center p-3">
                                        <p class="mt-3" style="color:rgb(255,215,0);">Shiny</p>
                                        <img id="prednjaSS-<?php echo $row['id']; ?>" class="d-inline" src="<?php echo $row['prednjaSSlika']; ?>" />
                                        <img id="zadnjaSS-<?php echo $row['id']; ?>" class="d-none" src="<?php echo $row['zadnjaSSlika']; ?>" />
                                    </div>
                                </div>

                                <script>
                                    $(document).ready(function() {
                                        $("#prednjaS-<?php echo $row['id']; ?>").on("mouseenter", function() {
                                            $("#prednjaS-<?php echo $row['id']; ?>").removeClass("d-inline").addClass("d-none");
                                            $("#zadnjaS-<?php echo $row['id']; ?>").removeClass("d-none").addClass("d-inline");
                                        }).on("mouseleave", function() {
                                            $("#prednjaS-<?php echo $row['id']; ?>").removeClass("d-none").addClass("d-inline");
                                            $("#zadnjaS-<?php echo $row['id']; ?>").addClass("d-none").removeClass("d-inline");
                                        });

                                        $("#prednjaSS-<?php echo $row['id']; ?>").on("mouseenter", function() {
                                            $("#prednjaSS-<?php echo $row['id']; ?>").removeClass("d-inline").addClass("d-none");
                                            $("#zadnjaSS-<?php echo $row['id']; ?>").removeClass("d-none").addClass("d-inline");
                                        }).on("mouseleave", function() {
                                            $("#prednjaSS-<?php echo $row['id']; ?>").removeClass("d-none").addClass("d-inline");
                                            $("#zadnjaSS-<?php echo $row['id']; ?>").addClass("d-none").removeClass("d-inline");
                                        });
                                    });
                                </script>

                                <?php
                                if (isInTeam($row['id'], $pokemoniutimu)) { ?>
                                    <form action="./snippets/ukloni.php?id=<?php echo $row['id']; ?>" method="POST">
                                        <button class="btn btn-danger" type="submit">Ukloni</button>
                                    </form>
                                <?php } else { ?>
                                    <form action="./snippets/dodaj.php?id=<?php echo $row['id']; ?>" method="POST">
                                        <button class="btn btn-dark" <?php if ($timpun) echo 'disabled'; ?> type="submit">Dodaj</button>
                                    </form>
                                <?php } ?>

                            </div>
                            <div class="modal fade" id="pokemonModal-<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="pokemonModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="row modal-title" id="pokemonModalLabel">
                                                <div class="col-md-12 text-center">
                                                    <?php echo $row['naziv']; ?>
                                                </div>
                                            </h5>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-md-12">
                                                <h5>Opis:</h5>
                                                <p><?php echo $row['opis']; ?></p>                                             
                                                <hr>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Sposobnosti:</h5>
                                                <p><?php echo $row['sposobnostPrva'];
                                                    if ($row['sposobnostDruga'] != '') {
                                                        echo nl2br(", ");
                                                        echo $row['sposobnostDruga'];
                                                        if ($row['sposobnostTreca'] != '') {
                                                            echo nl2br(", ");
                                                            echo $row['sposobnostTreca'];
                                                        }
                                                    } ?>
                                                </p>
                                                <p>
                                                    <hr>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Efektivan protiv:</h5>
                                                <p class="p-3">
                                                    <?php
                                                    $string = $row['efektivnost'];
                                                    $str_arr = explode(",", $string);
                                                    $howmuch = count($str_arr);
                                                    if ($row['efektivnost'] != null) {
                                                        for ($i = 0; $i < $howmuch; $i++) {
                                                            $str_arr[$i] = strtolower($str_arr[$i]);
                                                            echo '<span class="mx-1 type ' . $str_arr[$i] . '"></span>';
                                                        }
                                                    } else {
                                                        echo '<span class="mx-1"></span>';
                                                    }
                                                    ?>
                                                </p>
                                                <hr>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Slab protiv:</h5>
                                                <p class="p-3">
                                                    <?php $string = $row['slabost'];
                                                    $str_arr = explode(",", $string);
                                                    $howmuch = count($str_arr);
                                                    if ($row['slabost'] != null) {
                                                        for ($i = 0; $i < $howmuch; $i++) {
                                                            $str_arr[$i] = strtolower($str_arr[$i]);
                                                            echo '<span class="mx-1 type ' . $str_arr[$i] . '"></span>';
                                                        }
                                                    } else {
                                                        echo '<span class="mx-1"></span>';
                                                    }
                                                    ?>
                                                </p>
                                                <hr>
                                            </div>
                                            <div class="row col-md-12">
                                                <div class="col-md-2 text-center">
                                                    <span class="h5">HP:</span><br>
                                                    <span class="text-muted"><?php echo $row['statHp']; ?></span>
                                                </div>
                                                <div class="col-md-2 text-center">
                                                    <span class="h5">ATT:</span><br>
                                                    <span class="text-muted">
                                                        <?php echo $row['statAtt']; ?>
                                                    </span>
                                                </div>
                                                <div class="col-md-2 text-center">
                                                    <span class="h5">DEF:</span><br>
                                                    <span class="text-muted">
                                                        <?php echo $row['statDef']; ?>
                                                    </span>
                                                </div>
                                                <div class="col-md-2 text-center">
                                                    <span class="h5">SPA:</span><br>
                                                    <span class="text-muted">
                                                        <?php echo $row['statSP']; ?>
                                                    </span>
                                                </div>
                                                <div class="col-md-2 text-center">
                                                    <span class="h5">SPD:</span><br>
                                                    <span class="text-muted">
                                                        <?php echo $row['statSD']; ?>
                                                    </span>
                                                </div>
                                                <div class="col-md-2 text-center">
                                                    <span class="h5">SPEED:</span><br>
                                                    <span class="text-muted">
                                                        <?php echo $row['statSpd']; ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </main>
    <footer class=" container-fluid bg-dark text-center text-white text-lg-start">
        <?php include './snippets/footer.html'; ?>
    </footer>
</body>

</html>