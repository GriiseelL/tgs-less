<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="web.css">
</head>
<body>
    <div class="login">
            <h2 class="header">Form LOGIN</h2>
        <form class="login-container" action="actionLogin.php" method="post">
            <p> <input type="email" placeholder="email" name="email"></p>
            <p> <input type="password" placeholder="password" name="password"></p>
            <p><input type="submit" value="login" onclick="myFunction()"></p>
        </form>
    </div>
</body>
</html>