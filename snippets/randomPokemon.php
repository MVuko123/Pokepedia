<?php

include_once './konekcija.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$userId = $_SESSION['id'];
$id = $_GET['id'];

$query = "DELETE FROM tim WHERE korisnik='$userId' AND pokemon='$id'";

if (!mysqli_query($conn, $query)) {
    echo "Error: " . $query . ":-" . mysqli_error($conn);
}

$random = rand(1, 151);

$query = "INSERT INTO tim VALUES ('$userId', '$userId', '$random')";
if (mysqli_query($conn, $query)) {
    header('Location: ../index.php');
} else {
    echo "Error: " . $query . ":-" . mysqli_error($conn);
}
