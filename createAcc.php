<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/createAcc.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>Utwórz konto</title>
</head>
<body>
    <h1>Utwórz konto na naszej stronie!</h1>
    <hr>

    <div id="acc">
    <form method="post" action="scripts/signin">
        <div>
        <label>Login</label><br>
        <input type="text" name="login">
        </div>

        <div>
        <label>Email</label><br>
        <input type="text" name="email"> <span style="font-size: 15px">(niewymagane)</span>
        </div>
            
        <div>
        <label>Hasło</label><br>
        <input type="password" name="password">
        </div>

        <div>
        <label>Potwierdź hasło</label><br>
        <input type="password" name="password">
        </div>

        <button class="button" value="Utwórz konto" onclick="document.location.href = 'createAcc'">Utwórz konto</button>

    </div>
    
           
        </div>
    </form>
</body>
</html>