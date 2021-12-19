<?php session_start() ?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>Strona Świąteczna</title>
</head>

<body>
    <div id="img"><img src="img/sc.gif"></div>
    <div id="form">
        <h1>Sklep Bałaga:)</h1>
        <p>Zaloguj się do sklepu.</p><br>
        <form method="POST" action="scripts/login" onsubmit="return checkValidation()">
            <label>Nazwa użytkownika lub e-mail</label><br>
            <input type="text" name="login" id="login">
            <br><br>
            <label>Hasło</label><br>
            <input type="password" name="pass" id="pass">
            <br>
            <div id="err"><?php if(isset($_SESSION['errpass'])) echo "<br>".$_SESSION['errpass']; ?></div>
            <br>
            <button class="button" value="Zaloguj">Zaloguj się</button>

        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/index.js"></script>
</body>

</html>