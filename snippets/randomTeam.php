<?php

include_once './konekcija.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$userId = $_SESSION['id'];

$query = "DELETE FROM tim WHERE korisnik='$userId' AND pokemon BETWEEN 1 AND 151";

if (!mysqli_query($conn, $query)) {
    echo "Error: " . $query . ":-" . mysqli_error($conn);
}

$flags = [];

for ($i = 0; $i < 3; $i++) {
    $val = rand(1, 151);
    $query = "INSERT INTO tim VALUES ('$userId', '$userId', '$val')";
    mysqli_query($conn, $query) ? $flags[$i] = true : $flags[$i] = false;
}

$s1 = $flags[0];
$s2 = $flags[1];
$s3 = $flags[2];

$s1 && $s2 && $s3 ? header('Location: ../index.php') : print "Error: " . $query . ":-" . mysqli_error($conn);
