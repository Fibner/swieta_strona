<?php
session_start();
if($_SESSION["isLogged"]){
    header("Location: main");
}
?>
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
        <h1>Sklep Bałaga :)</h1>
        <p>Zaloguj się do sklepu.</p><br>
        <form method="POST" action="scripts/login" onsubmit="return checkValidation()">
            <label><b>Nazwa użytkownika lub e-mail</b></label><br>
            <input type="text" name="login" id="login">
            <br><br>
            <label><b>Hasło</b></label><br>
            <input type="password" name="pass" id="pass">
            <br>
            <div id="err"><?php if(isset($_SESSION['errpass'])) echo "<br>".$_SESSION['errpass']; ?></div>
            <br>
            <input type="submit" class="button" value="Zaloguj się"></button>
            <br>
            <br>
            <button style="background-color: rgb(48, 46, 46);" class="button" value="Zaloguj" onclick="document.location.href = 'createAcc'">Utwórz konto</button>

        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/index.js"></script>
</body>

</html>