<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$logout_message = "<div class='msgln'><span class='left-info'>Korisnik: <b class='user-name-left'>" . $_SESSION["nadimak"] . "</b> je napustio chat.</span><br></div>";
file_put_contents("./log.html", $logout_message, FILE_APPEND | LOCK_EX);

header('Location: ../index.php');
