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
            <h1>Aggiungi un nuovo allergeno</h1>
            <input type="" id="name" placeholder="Id utente" name="id" maxlength="50" required>
            <button type="submit" name="user">Invia</button>
        </form>

<?php
session_start();

include_once dirname(__FILE__) . '/../function/user.php';

$err = "";

//stringa di identificazione del server, quando premi button il metodo diventa post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!empty($_POST['id'])) {
    $data = $_POST['id'];

    $response = disactiveUser($data);
    
    if(!empty($response)){
      echo ('<p>' . $response . '</p>'); 
    }
  }
}
?>

      </div>
  </body>
</html>