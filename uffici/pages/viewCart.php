<?php
session_start();

include_once dirname(__FILE__) . '/../function/cart.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!empty($_POST['id'])) {
    $data = $_POST['id'];

    viewCart($data);   
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
            <form method="post">
              <h1>Id carrello da visualizzare</h1>
              <input type="" id="name" placeholder="id" name="id" maxlength="50" required>
              <button type="submit" name="user">Invia</button>
            </form>
            
        </form>
    </div>
  </body>
</html>