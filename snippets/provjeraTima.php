<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}



if (isset($_SESSION['id'])) {
    $provjeraTim = "SELECT * FROM tim WHERE korisnik='$_SESSION[id]'";
    $result = mysqli_query($conn, $provjeraTim);
    if (mysqli_num_rows($result) > 0) $_SESSION['imatim'] = true;
    else $_SESSION['imatim'] = false;
}

?>
