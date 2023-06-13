<?php
    include_once './snippets/konekcija.php';

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $get_korisnik = "SELECT * FROM korisnik";
    $result_korisnik = $conn->query($get_korisnik);
    $korisnik = [];

    while ($row = $result_korisnik->fetch_assoc()) {
        $korisnik[$row['id']] = $row['nadimak'];
    }

    $get_ljestvica = "SELECT * FROM ljestvica";
    $result_ljestvica = $conn->query($get_ljestvica);
    $ljestvica = [];
    
    while ($row = $result_ljestvica->fetch_assoc()) {
        $ljestvica[$korisnik[$row['korisnik']]] = $row['postici'];
    }

    arsort($ljestvica);

    print_r($ljestvica);

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
        <div class="row">
            <div class="col-12" style="margin-top: 40px;">
                <h1 class="text-center">Ljestvica</h1>
            </div>
            <div class="scores">
                <table class="table table-striped">
                    <tr>
                        <th>Nadimak</th>
                        <th>Bodovi</th>
                    </tr>
                    <?php
                        foreach ($ljestvica as $key => $value) {
                            echo "<tr>";
                            echo "<td>$key</td>";
                            echo "<td>$value</td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>
        </div>
    </main>
</body>
</html>