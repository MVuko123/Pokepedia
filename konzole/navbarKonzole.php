<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-0">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="../index.php" class="nav-item nav-link py-1">Početna</a>
                <a href="https://www.pokemon.com/us/pokemon-news/" class="nav-item nav-link py-1" target="_blank">Službene novosti</a>
                <a href="https://www.pokemon.com/us/" class="nav-item nav-link py-1" target="_blank">Službena stranica</a>
                <a href="https://www.reddit.com/r/pokemon/" class="nav-item nav-link py-1" target="_blank">Reddit</a>
                <a href="../pokedex.html" class="nav-item nav-link py-1" target="_blank">Nacionalni Pokedex</a>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle py-1" href="#" id="games_dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Konzole</a>
                    <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <a class="dropdown-item" href="./gameBoy.php">Game Boy</a>
                        <a class="dropdown-item" href="./gameBoyColor.php">Game Boy Colour</a>
                        <a class="dropdown-item" href="./gameBoyAdvanced.php">Game Boy Advance</a>
                        <a class="dropdown-item" href="./nintendoDS1.php">Nintendo DS (4. Generacija)</a>
                        <a class="dropdown-item" href="./nintendoDS2.php">Nintendo DS (5. Generacija)</a>
                        <a class="dropdown-item" href="./nintendo3DS1.php">Nintendo 3DS (6. generacija)</a>
                        <a class="dropdown-item" href="./nintendo3DS2.php">Nintendo 3DS (7. generacija)</a>
                        <a class="dropdown-item" href="./nintendoSwitch.php">Nintendo Switch (8. generacija)</a>
                        <a class="dropdown-item" href="./nintendoSwitch2.php">Nintendo Switch (9. generacija)</a>
                    </div>
                </div>
            </div>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
                <div class="navbar-nav ms-auto">
                    <div class="nav-item dropdown dropstart" id="korisnikLogged">
                        <a class="nav-link dropdown-toggle py-1" href="#" id="login_dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['nadimak']; ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <a href="../chat.php" class="dropdown-item" target="_blank">Chat</a>
                            <a href="../teamBuilder.php" class="dropdown-item" target="_blank">Team Builder</a>
                            <a href="../tournament.php" class="dropdown-item">Tournament</a>
                            <a href="../ljestvica.php" class="dropdown-item">Ljestvica</a>
                            <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'owner') { ?>
                                <div class="dropdown-divider"></div>
                                <a href="../dashboard.php" class="dropdown-item" target="_blank">Dashboard</a>
                                <div class="dropdown-divider"></div>
                            <?php } ?>
                            <a href="../odjava.php" class="dropdown-item">Odjava</a>
                        </div>
                    </div>
                </div>
            <?php }
            if (!isset($_SESSION['loggedin'])) {
                echo '
                <div class="navbar-nav ms-auto">
                    <div class="nav-item dropdown dropstart" id="korisnikNotLogged">
                        <a class="nav-link dropdown-toggle py-1" href="#" id="login_dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Korisnik</a>
                        <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <a class="dropdown-item" href="../prijava.php">Prijava</a>
                            <a class="dropdown-item" href="../registracija.php">Registracija</a>
                        </div>
                    </div>
                </div>';
            } ?>
        </div>
    </div>
</nav>

<script>
    $(window).on('resize', function() {
        if ($(window).width() < 992) {
            $('#korisnikLogged').removeClass('dropstart');
            $("#korisnikNotLogged").removeClass('dropstart');
        } else {
            $('#korisnikLogged').addClass('dropstart');
            $("#korisnikNotLogged").addClass('dropstart');
        }
    });
</script>