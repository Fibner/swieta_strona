<?php session_start() ?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Strona Świąteczna</title>
</head>

<body>
    <div id="img"><img src="img/sc.gif"></div>
    <div id="form">
        <h1>Halo kolego, zaloguj się pierw!</h1>
        <form method="POST" action="scripts/login.php" onsubmit="return checkValidation()">
            <label>Login:</label>
            <input type="text" name="login" id="login">
            <br><br>
            <label>Hasło:</label>
            <input type="password" name="pass" id="pass">
            <br>
            <div id="err"></div>
            <br>
            <input type="submit" value="Zaloguj">
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/index.js"></script>
</body>

</html>