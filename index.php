<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Świąteczna</title>
</head>

<body style="text-align: center; margin-top: 20%">
    <div>
        <h1>Halo kolego, zaloguj się pierw!</h1>
        <form method="POST" action="scripts/login.php" onsubmit="return checkValidation()">
            <label>Login:</label>
            <input type="text" name="login" id="login">
            <br><br>
            <label>Hasło:</label>
            <input type="password" name="pass" id="pass">
            <br>
            <div style="color: red;"><?php if(isset($_SESSION["err"])){echo $_SESSION["err"];}?></div>
            <br>
            <input type="submit" value="Zaloguj">
            <!-- teścik kochany :) -->
        </form>
    </div>
    <script src="js/index.js"></script>
</body>

</html>