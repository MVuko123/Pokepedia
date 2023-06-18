<?php
include_once './snippets/konekcija.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$get_korisnik = "SELECT * FROM korisnik";
$result_korisnik = $conn->query($get_korisnik);
$korisnik = [];

while ($row = $result_korisnik->fetch_assoc()) {

    $korisnik[$row['id']] = array(
        "nadimak" => $row['nadimak'],
    );

}

$get_pokemon = "SELECT * FROM pokemon";
$result_pokemon = $conn->query($get_pokemon);
$pokemons = [];

while ($row = $result_pokemon->fetch_assoc()) {
    $pokemons[$row['id']] = $row['naziv'];
}

$get_tim = "SELECT * FROM tim";
$result_tim = $conn->query($get_tim);
$tim = [];

while ($row = $result_tim->fetch_assoc()) {
    $tim[count($tim)] = array($row['naziv'], $pokemons[$row['pokemon']]);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true"></script>
    <link rel="shortcut icon" type="image/png" href="./assets/slike/poke_fav.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/teambuilder.css">
    <link rel="stylesheet" href="./assets/css/css.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Poképedia</title>
</head>

<body>
    <header>
        <?php include './navbar.php'; ?>
    </header>
    <main style="padding-right: 50px;">
        <div class="col-12" style="margin-top: 40px;">
            <h1 class="text-center">Turnir</h1>
        </div>
        <div class="row" id="div-game-teams">
            <div class="column" id="div-player-table">

            <table class="table table-hover">
                <tr>
                    <th>Nadimak</th>
                    <th>Tim</th>
                    <th>Akcija</th>
                </tr>
                <?php
                foreach ($korisnik as $key => $value) {
                    $pokes = [];

                    foreach ($tim as $key2 => $value2) {
                        if ($key == $value2[0]) {
                            array_push($pokes, $value2[1]);
                        }
                    }
                    if(count($pokes) == 0) {
                        array_push($pokes, "Nema pokemon");
                    }
                    $username = $value['nadimak'];

                    echo "<tr>";
                    echo "<td>" . $value['nadimak'] . "</td>";
                    echo "<td>" . implode(", ", $pokes) . "</td>";
                    echo "<td>" .
                    "<button onclick=pickUser($key,'$username') class=\"btn btn-primary\">Odaberi</button>
                    <input type='hidden' value='" . $key . "' name='id'>
                    <input type='hidden' value='" . $value['nadimak'] . "' name='nadimak'>
                    </td>";
                    echo "</tr>";

                }
                ?>
            </table>
            </div>
            <div class="column" id="div-game-control" style="margin-top: 20px;">
                <div class="game">
                    <div class="control" id="control">
                        <button class="btn btn-danger" onclick=resetGame()>RESET</button>
                        <button class="btn btn-success" id="btn-start-stop" onclick=startGame()>START</button>
                    </div>
                    <div class="play-area" id="play-area">
                    </div>
                    <div class="play">
                        <?php include('./bracket.html');?>
                    </div>
                    <div id="win-area"></div>
                </div>
            </div>
        </div>
    </main>
</body>

<script src="./assets/skripte/tournament.js"></script>
</html>