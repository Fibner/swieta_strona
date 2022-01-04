<?php
include "scripts/functions.php";
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
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet"><style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
</style>
</head>

<body>
    <div id="container">

        <div id="logo">
            <p>Witamy na stronie świątecznej!</p>
        </div>
        <img class="img" src="img/1.png">

        <div id="menu">

            <a class="link" href="forher">
                <div style="background-color: rgb(90, 0, 0);" class="option">Prezenty dla niej</div>
            </a>

            <a class="link" href="google.com">
                <div class="option">Prezenty dla niego</div>
            </a>

            <a class="link" href="google.com">
                <div class="option">Prezenty dla dziecka</div>
            </a>

            <a class="link" href="google.com">
                <div class="option">O nas</div>
            </a>

            <a class="link" href="google.com">
                <div class="option">Kontakt</div>
            </a>

            <a class="link" href="scripts/logout">
                <div class="logout">Wyloguj</div>
            </a>

            <div style="clear:both;"></div>
        </div>

        <div id="content" style="font-family: Arial, Helvetica, sans-serif;">
            <?php 
            createTable("her");
            ?>
        </div>

        <div id="footer">
            <hr>
            Filip Bałaga 3TIP/G
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/global.js"></script>
</body>

</html>