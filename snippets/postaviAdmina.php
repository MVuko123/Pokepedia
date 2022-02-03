<?php

include './konekcija.php';

session_start();
$userId = $_GET['id'];
$param = $_GET['param'];

$strSQL = $param == "true" ? "UPDATE korisnik SET uloga='admin' WHERE id='$userId'" : $strSQL = "UPDATE korisnik SET uloga='korisnik' WHERE id='$userId'";

if (mysqli_query($conn, $strSQL)) {
    header('Location: ../dashboard.php');
} else {
    echo "Error: " . $strSQL . ":-" . mysqli_error($conn);
}
