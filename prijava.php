<?php

include_once './snippets/konekcija.php';
$msg = 'Unesite Vaše podatke.';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['email'] = "";

if (isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['lozinka'])) {
    $sql = "SELECT * FROM pokepedia_webprojekt.korisnik";
    $q = mysqli_query($conn, $sql);

    while ($line = mysqli_fetch_array($q, MYSQLI_ASSOC)) {
        if ($_POST['email'] == $line['email'] && password_verify($_POST['lozinka'], $line['lozinka'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['nadimak'] = $line['nadimak'];
            $_SESSION['role'] = $line['uloga'];
            $_SESSION['id'] = $line['id'];

            include './snippets/provjeraTima.php';

            header('Location: ./index.php');
        } else {
            $msg = 'Wrong login details.';
        }
    }
}
if (!empty($_POST["remember"])) {
    setcookie("email", $_POST["email"], time() + 3600);
    setcookie("lozinka", $_POST["lozinka"], time() + 3600);
    // echo "Cookies Set Successfuly";
} else {
    setcookie("email", "");
    setcookie("lozinka", "");
    // echo "Cookies Not Set";
}
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="assets/slike/poke_fav.png" />
    <title>Poképedia</title>
</head>

<body id="login">
    <header>
        <?php include './navbar.php'; ?>
    </header>
    <main>
        <div class="container-fluid mx-auto my-5">
            <form action="" method="post">
                <div class="container-fluid py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card bg-dark text-white" style="border-radius: 1rem">
                                <div class="card-body p-5 text-center">
                                    <div class="mb-md-5 mt-md-4 pb-5">
                                        <h2 class="fw-bold mb-2 text-uppercase">Prijava</h2>
                                        <p class="text-white-50 mb-5">
                                            Unesite vaš email i lozinku!
                                        </p>
                                        <div class="form-outline form-white mb-4">
                                            <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" autofocus />
                                            <label class="form-label" for="typeEmailX">Email</label>
                                        </div>
                                        <div class="form-outline form-white mb-4">
                                            <input type="password" id="typePasswordX" class="form-control form-control-lg" name="lozinka" />
                                            <label class="form-label" for="typePasswordX">Lozinka</label>
                                        </div>
                                        <p class="small mb-3 pb-lg-2">
                                            <a class="text-white-50" href="#!">Zaboravili ste lozinku?</a>
                                        </p>
                                        <div class="form-check d-flex justify-content-center mb-4">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" name="remeber" />
                                            <label class="form-check-label" for="form2Example3">
                                                Zapamti me.
                                            </label>
                                        </div>
                                        <button class="btn btn-outline-light btn-lg px-5" type="submit" name="login">
                                            Prijavi se
                                        </button>
                                        <div class="row">
                                            <p class="mb-0">
                                                <br> Ne posjeduješ račun?
                                                <a href="./registracija.html" class="text-white-50 fw-bold">Registriraj se</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <script src="assets/skripte/pocetna.js"></script>
    </main>
    <footer class="bg-dark text-center text-white text-lg-start">
        <?php include './snippets/footer.html'; ?>
    </footer>
</body>

</html>