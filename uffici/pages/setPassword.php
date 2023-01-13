<?php
session_start();

include_once dirname(__FILE__) . '/../function/user.php';

$err = ""; 

//stringa di identificazione del server, quando premi button il metodo diventa post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = array(
        "email" => $_POST['email'],
        "password" => $_POST['password'],
        "newPassword" => $_POST['newPassword'],
    );
    changePassword($data);
}
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
        <form method="post">
            <h1>Cambia info tuo profilo</h1>
            <input type="" id="name" placeholder="email" name="email" maxlength="50" required>
            <input type="" id="name" placeholder="password" name="password" maxlength="50" required>
            <input type="" id="name" placeholder="Nuova password" name="newPassword" maxlength="50" required>
            <button type="submit" name="changePassword">Invia</button>
        </form>
    </div>
  </body>
</html>