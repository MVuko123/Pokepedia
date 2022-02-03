<?php

include './konekcija.php';

session_start();

$id = $_GET['id'];
$userId = $_SESSION['id'];
$pokemon = "";
$isfull = false;

$strSQL = "SELECT * FROM korisnik WHERE id='$userId'";
$result = mysqli_query($conn, $strSQL);
$row = mysqli_fetch_assoc($result);
if (is_null($row['prviPokemon']) || $row['prviPokemon'] == 152) $pokemon = 'prviPokemon';
else {
    if (is_null($row['drugiPokemon']) || $row['drugiPokemon'] == 152) $pokemon = 'drugiPokemon';
    else {
        if (is_null($row['treciPokemon']) || $row['treciPokemon'] == 152) $pokemon = 'treciPokemon';
        else {
            $_SESSION["pogreska"] = "Tim je popunjen.";
            $isfull = true;
        }
    }
}

if (!$isfull) {
    $query = "UPDATE korisnik SET $pokemon='$id' WHERE id='$userId'";
    if (mysqli_query($conn, $query)) {
        header('Location: ../teamBuilder.php');
    } else {
        echo "Error: " . $query . ":-" . mysqli_error($conn);
    }
} else {
    header('Location: ../teamBuilder.php');
}
