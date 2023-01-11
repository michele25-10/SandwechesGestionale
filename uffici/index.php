<?php
session_start();

include_once dirname(__FILE__) . '/function/login.php';

$loginErr = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!empty($_POST['email']) && !empty($_POST['password'])) {//se la variabile mail o password che devono essere inviate non sono vuote all'ora si invia
    $data = [       //Immetto i dati all'interno di data
      "email" => $_POST['email'],
      "password" => $_POST['password'],
    ];

    if (login($data) == -1)
    {
      $loginErr = "Email o password errata";
    }
  }
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
            <h1>Login</h1>
            <input type="email" id="email" placeholder="Email" name="email" maxlength="50" required>
            <input type="password" id="password" placeholder="Password" name="password" required>
            <button type="submit" name="login">Invia</button>
        </form>
    </div>
  </body>
</html>