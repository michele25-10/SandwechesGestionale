<?php
session_start();

include_once dirname(__FILE__) . '/../function/delete.php';

$err = "";

//stringa di identificazione del server, quando premi button il metodo diventa post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!empty($_POST['name'])) {
    $data = $_POST['name'];
    deleteTag($data);
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
            <h1>Elimina un tag</h1>
            <input type="" id="name" placeholder="Nome tag da eliminare" name="name" maxlength="50" required>
            <button type="submit" name="login">Invia</button>
        </form>
    </div>
  </body>
</html>