<?php

$id = $_SESSION['id'];

$sql = "SELECT p.naziv, p.prednjaSlika, p.id, t.pokemon FROM pokemon as p, tim as t WHERE korisnik='$id' and p.id=t.pokemon";
$query = mysqli_query($conn, $sql) or die(mysqli_error($error));

while ($row = mysqli_fetch_array($query)) {
    if (mysqli_num_rows($query) == 3) echo "<div class=\"col-md-4 text-center p-3\" style=\"border:1px solid white; background-color: rgba(255,255,255,0.25);\">";
    else if (mysqli_num_rows($query) == 2) echo "<div class=\"col-md-5 mx-auto text-center p-3\" style=\"border:1px solid white; background-color: rgba(255,255,255,0.25);\">";
    else echo "<div class=\"col-md-6 mx-auto text-center p-3\" style=\"border:1px solid white; background-color: rgba(255,255,255,0.25);\">";
    echo "<p>" . $row['naziv'] . "</p>";
    echo "<img id='pok2' src=";
    echo $row['prednjaSlika'];
    echo " />";
    echo '<p class="my-3"><a href="snippets/ukloni.php?p=1&id=';
    echo $row['id'];
    echo '" class="btn btn-danger btn-sm w-100">Ukloni Pokémona</a></p>';
    echo '<a href="./snippets/randomPokemon.php?id=' . $row['id'] . '" class="btn btn-info btn-sm w-100">Nasumičan Pokémon</a></div>';
} ?>
<div class="row mx-auto container-fluid">
    <div class="col-6 my-3 text-center">
        <a href="./snippets/randomTeam.php" class="btn btn-info w-100">Nasumično odaberi tim</a>
    </div>
    <div class="col-6 my-3 text-center">
        <a href="./snippets/deleteTeam.php" class="btn btn-danger w-100">Ukloni cijeli tim</a>
    </div>
</div>