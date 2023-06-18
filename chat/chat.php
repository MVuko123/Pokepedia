<?php

include_once '../snippets/konekcija.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
    $login_message = "<div class='msgln'><span class='left-info'>Korisnik: <b class='user-name-joined'>" . $_SESSION["nadimak"] . "</b> se pridružio chatu.</span><br></div>";
    file_put_contents("./log.html", $login_message, FILE_APPEND | LOCK_EX);
} else {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="../assets/slike/poke_fav.png" />
    <title>Poképedia</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>
    <?php
    if (isset($_SESSION["nadimak"])) {
    ?>
        <div id=wrapper >
            <div id="menu">
                <p class="welcome">Pozdrav, <b><?php echo $_SESSION["nadimak"]; ?></b></p>
                <p class="logout"><a id="exit" name="logout" href="#">Napusti Chat</a></p>
            </div>

            <div id="chatbox">
                <?php
                if (file_exists("./log.html") && filesize("./log.html") > 0) {
                    $contents = file_get_contents("./log.html");
                    echo $contents;
                }
                ?>
            </div>

            <form name="message" class="message">
                <div class="container-fluid row">
                    <input name="usermsg" class="col-2" type="text" id="usermsg" autofocus />
                    <input name="submitmsg" class="col-2" type="submit" id="submitmsg" value="Pošalji" />
                </div>
            </form>
        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#submitmsg").click(function() {
                    var clientmsg = $("#usermsg").val();
                    $.post("post.php", {
                        text: clientmsg
                    });
                    $("#usermsg").val("");
                    return false;
                });

                function loadLog() {

                    $.ajax({
                        url: "./log.html",
                        cache: false,
                        success: function(html) {
                            $("#chatbox").html(html);
                        }
                    });
                }

                setInterval(loadLog);

            });
            $("#exit").click(function() {
                var exit = confirm("Jeste li sigurni da želite napustiti chat?");
                if (exit == true) window.location = "../snippets/logoutChat.php";
            });
        </script>
</body>

</html>
<?php
    }
?>