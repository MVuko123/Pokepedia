<?php

include_once './snippets/konekcija.php';

$error = "";

session_start();

$imePrezime = $email = $pwd1 = $pwd2 = "";
$status = true;

if (isset($_POST['reg_user'])) {
    $nadimak = $_POST['nadimak'];
    $email = $_POST['email'];
    $pwd1 = $_POST['passwordOne'];
    $pwd2 = $_POST['passwordTwo'];
    $error = "";
    $loggedin = "";


    if ($pwd1 != $pwd2) {
        $error = "Lozinke se ne podudraju!";
        $status = false;
    } else {
        $hashed_password = password_hash($pwd1, PASSWORD_DEFAULT);

        $usernameTaken = "SELECT * FROM pokepedia_webprojekt.korisnik WHERE nadimak='$nadimak'";
        $doesExist = mysqli_query($conn, $usernameTaken);
        if (mysqli_num_rows($doesExist) > 0) {
            $error = "Nadimak je zauzet!";
            $status = false;
        }


        $userExists = "SELECT * FROM pokepedia_webprojekt.korisnik WHERE email='$email'";
        $doesExist = mysqli_query($conn, $userExists);
        if (mysqli_num_rows($doesExist) > 0) {
            $error = "Email je već zauzet!";
            $status = false;
        }

        if (!isset($_POST['checkbox'])) {
            $error = "Morate prihvatiti uvjete za registraciju!";
            $status = false;
        }

        if ($status) {
            $query = "INSERT INTO pokepedia_webprojekt.korisnik (nadimak, email, lozinka, uloga) VALUES ('$nadimak', '$email', '$hashed_password', 'korisnik')";
            $results = mysqli_query($conn, $query);
            if (!$results) {
                printf("Error message: %s\n", $conn->error);
            }


            header('Location: ./prijava.php');
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/css.css" />
    <link rel="stylesheet" href="assets/css/registracija.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true"></script>
    <link rel="shortcut icon" type="image/png" href="assets/slike/poke_fav.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Poképedia</title>
</head>


<body id="registracija">
    <header>
        <?php include './navbar.php'; ?>
    </header>
    <main>

        <div class="container-fluid mx-auto my-5">
            <button type="button" class="btn btn-outline-dark btn-floating" id="btn-back-to-top">
                <img src="assets/slike/to_top.png" alt="" style="max-width: 32px" />
            </button>

            <form action="" method="post">
                <div class="container-fluid py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card bg-dark text-white" style="border-radius: 1rem">
                                <div class="card-body p-5 text-center">
                                    <div class="mb-md-5 mt-md-4 pb-5">
                                        <h2 class="fw-bold mb-2 text-uppercase">Registracija</h2>
                                        <p class="text-white-50 mb-5">
                                            Unesite vaše podatke
                                        </p>

                                        <div class="form-outline form-white mb-4">
                                            <input type="txt" id="typeNameX" class="form-control form-control-lg" name="nadimak" />
                                            <label class="form-label" for="typeNameX">Vaš nadimak</label>
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" />
                                            <label class="form-label" for="typeEmailX">Unesite Vaš Email</label>
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <input type="password" id="typePassword1X" class="form-control form-control-lg" name="passwordOne" />
                                            <label class="form-label" for="typePasswordX">Unesite Vašu Lozinka</label>
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <input type="password" id="typePassword2X" class="form-control form-control-lg" name="passwordTwo" />
                                            <label class="form-label" for="typePasswordX">Ponovite Vašu Lozinka</label>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" name="checkbox" />
                                            <label class="form-check-label" for="form2Example3">
                                                Prihvaćam sve navedene <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">uvjete korištenja</a>.
                                            </label>
                                        </div>

                                        <button class="btn btn-outline-light btn-lg px-5" type="submit" name="reg_user">
                                            Registriraj se
                                        </button>
                                        </br>
                                        <p style="color: red; font-size:20px">
                                            <?php
                                            echo $error;
                                            ?>
                                        </p>
                                        <div class="row">
                                            <p class="mb-0">
                                                <br>Posjeduješ račun?
                                                <a href="prijava.php" class="text-white-50 fw-bold">Prijavi se</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content bg-dark">
                        <div class="modal-header">
                            <h5 class="modal-title text-white" id="exampleModalLabel">Uvjeti korištenja</h5>
                        </div>
                        <div class="modal-body text-white" id="modalTijelo">
                            <div id="agreement">
                                <?php include './snippets/ToS.html'; ?>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="closeBtn" type="button" class="btn btn-outline-secondary disabled" data-bs-dismiss="modal">U redu</button>
                        </div>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $("#form2Example3c").prop("disabled", true);
                    });

                    $('.modal-body').scroll(function() {
                        if ($('#agreement').height() <= $("#modalTijelo").scrollTop() + $("#modalTijelo").height()) {
                            $('#closeBtn').removeClass('disabled');
                            $("#form2Example3c").prop("disabled", false);
                        }
                    });
                </script>
            </div>
            <script src="assets/skripte/pocetna.js"></script>
    </main>
    <footer class="bg-dark text-center text-white text-lg-start">
        <?php include './snippets/footer.html'; ?>
    </footer>
</body>

</html>