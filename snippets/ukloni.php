<?php

include './konekcija.php';

session_start();

$id = $_GET['id'];
$userId = $_SESSION['id'];

$query = "DELETE FROM tim WHERE korisnik='$userId' AND pokemon='$id'";

if (mysqli_query($conn, $query)) {
    header('Location: ../teamBuilder.php');
} else {
    echo "Error: " . $query . ":-" . mysqli_error($conn);
}
