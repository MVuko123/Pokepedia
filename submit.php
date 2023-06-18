<?php
    include_once './snippets/konekcija.php';

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if(!isset($_GET['user1']) || !isset($_GET['user2'])){
        header('Location: ../index.php');
    }
    
    print_r($_GET);

    $get_ljestvica = "SELECT * FROM ljestvica";
    $result_ljestvica = $conn->query($get_ljestvica);
    $ljestvica = [];

    while ($row = $result_ljestvica->fetch_assoc()) {
        $ljestvica[$row['korisnik']] = $row['postici'];
    }
    

    $score1 = 3;
    $score2 = 1.5;

    foreach($ljestvica as $key => $value){
        if($key == $_GET['user1']){
            $score1 += $value;
            
            $update_ljestvica = "UPDATE ljestvica SET postici = $score1 WHERE korisnik = $key";
            $conn->query($update_ljestvica);

            $score1 = 0;
        }
        if($key == $_GET['user2']){
            $score2 += $value;
           
            $update_ljestvica = "UPDATE ljestvica SET postici = $score2 WHERE korisnik = $key";
            $conn->query($update_ljestvica);

            $score2 = 0;
        }
    }

    if($score1 != 0){
        $insert_ljestvica = "INSERT INTO ljestvica (korisnik, postici) VALUES (" . $_GET['user1'] . ", $score1)";
        $conn->query($insert_ljestvica);
    }

    if($score2 != 0){
        $insert_ljestvica = "INSERT INTO ljestvica (korisnik, postici) VALUES (" . $_GET['user2'] . ", $score2)";
        $conn->query($insert_ljestvica);
    }

    header('Location: ./ljestvica.php');
    
?>