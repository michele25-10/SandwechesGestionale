<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sandwech</title>
  </head>
  <body>
    <div class="container-fluid">
        <form method="post" action="/php/register.php">
            <h1>Login</h1>
            <input type="text" id="username" placeholder="Username" name="username" maxlength="50" required>
            <input type="password" id="password" placeholder="Password" name="password" required>
            <button type="submit" name="register">Invia</button>
        </form>

    </div>
  </body>
</html>