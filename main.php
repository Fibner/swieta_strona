<?php
session_start();
if(isset($_SESSION["isLogged"]) && !$_SESSION["isLogged"]){
    header("Location: index");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div id="container">

        <div id="logo">
            <p>Witamy na stronie świątecznej!</p>
        </div>
        <img class="img" src="img/1.png">

        <div id="menu">

            <a class="link" href="forher">
                <div class="option">Prezenty dla niej</div>
            </a>

            <a class="link" href="forhim">
                <div class="option">Prezenty dla niego</div>
            </a>

            <a class="link" href="forchild">
                <div class="option">Prezenty dla dziecka</div>
            </a>

            <a class="link" href="google.com">
                <div class="option">O nas</div>
            </a>

            <a class="link" href="users">
                <div class="option">Użytkownicy</div>
            </a>

            <a class="link" href="scripts/logout">
                <div class="logout">Wyloguj</div>
            </a>

            <div style="clear:both;"></div>
        </div>


        <div id="content">
            <p1>Idealny sklep na świąteczne zakupy!</p1><br>
            <p2>zapoznaj się z produktami na naszej stronie.</p2>
            <hr>
        </div>

        <div id="contentB">
            <p>Prezenty dla niej</p>
            <img class="img2" src="img/2.jpg">

            <hr>
            <button class="button" onclick="document.location.href = 'forher'">Pokaż kolekcje</button>
        </div>

        <div id="contentC">
            <p>Prezenty dla niego</p>
            <img class="img2" src="img/2.jpg">

            <hr>
            <button class="button" onclick="alert('HELLO WORLD')">Pokaż kolekcje</button>
        </div>

        <div id="contentD">
            <p>Prezenty dla dziecka</p>
            <img class="img2" src="img/2.jpg">

            <hr>
            <button class="button" onclick="alert('HELLO WORLD')">Pokaż kolekcje</button>
        </div>

        <div id="footer">
            <hr>
            Filip Bałaga 3TIP/G
        </div>

    </div>

    <script src="js/global.js"></script>
</body>

</html>