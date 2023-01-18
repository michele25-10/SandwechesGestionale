<?php
session_start();

include_once dirname(__FILE__) . '/function/login.php';

$inputs = "";
$errors = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if (!empty($_POST['email']) && !empty($_POST['password'])) {//se la variabile mail o password che devono essere inviate non sono vuote all'ora si invia
    $data = [       //Immetto i dati all'interno di data
      "email" => $_POST['email'],
      "password" => $_POST['password'],
    ];

    if (login($data) == -1)
    {
      $inputs = "Email o password errata";
    }
  }
  else
  {
    $err = "Campo richiesto";
  }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap">
        <link rel="stylesheet" href="static/css/login.css">
    </head>
    <body>
        <form method="post" action="pages\addClass.php">
            <h1>Login</h1>
            <input type="text" id="email" placeholder="Email" name="email">
            <input type="password" id="password" placeholder="Password" name="password">
            <button type="submit" name="login">Accedi</button>
        </form>
    </body>
</html>