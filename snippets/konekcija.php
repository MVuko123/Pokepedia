<?php

$hostname = "localhost";
// $username = "edunova";
$username = "root";
// $password = "edunova";
$password = "";
$db = "pokepedia_webprojekt";

$conn = new mysqli($hostname, $username, $password, $db);

if($conn->connect_error) {
    die ("Ne radi konekcija: " .$conn->connect_error); 
}

