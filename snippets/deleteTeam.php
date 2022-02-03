<?php

include_once './konekcija.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$userId = $_SESSION['id'];

$query = "DELETE FROM tim WHERE korisnik='$userId' AND pokemon BETWEEN 1 AND 151";

if (mysqli_query($conn, $query)) {
    header('Location: ../index.php');
} else {
    echo "Error: " . $query . ":-" . mysqli_error($conn);
}
