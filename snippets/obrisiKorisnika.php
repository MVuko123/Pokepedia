<?php

include_once './konekcija.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$userId = $_GET['id'];

$sql = "SELECT * FROM korisnik WHERE id='$userId'";

if (isset($_SESSION['id'])) {
    $provjeraTim = "SELECT * FROM tim WHERE korisnik='$_SESSION[id]'";
    $result = mysqli_query($conn, $provjeraTim);
    if (mysqli_num_rows($result) > 0) {
        $delTimQuery = "DELETE FROM tim WHERE korisnik='$userId' AND pokemon BETWEEN 1 AND 151";
        if (mysqli_query($conn, $delTimQuery)) {
            header('Location: ../dashboard.php');
        } else {
            echo "Error: " . $delTimQuery . ":-" . mysqli_error($conn);
        }
    }
    $korisnikDel = "DELETE FROM korisnik WHERE id='$userId'";
    if (mysqli_query($conn, $korisnikDel)) {
        header('Location: ../dashboard.php');
    } else {
        echo "Error: " . $query . ":-" . mysqli_error($conn);
    }
}
