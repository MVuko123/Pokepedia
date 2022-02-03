<?php

include './konekcija.php';

session_start();
$userId = $_SESSION['id'];
$pokemonid = $_GET['id'];


$strSQL = "SELECT * FROM korisnik WHERE id='$userId'";
$result = mysqli_query($conn, $strSQL);
$row = mysqli_fetch_assoc($result);

echo $row['nadimak'];


$query = "INSERT INTO tim VALUES ('$userId', '$userId', '$pokemonid')";
if (mysqli_query($conn, $query)) {
    header('Location: ../teamBuilder.php');
} else {
    echo "Error: " . $query . ":-" . mysqli_error($conn);
}
