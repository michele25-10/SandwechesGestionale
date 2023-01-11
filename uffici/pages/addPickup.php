<?php
session_start();

include_once dirname(__FILE__) . '/../function/addPickupPost.php';

$err = "";

//stringa di identificazione del server, quando premi button il metodo diventa post 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $data = $_POST['name']; 
      if(addPickup($data) == -1){
      $err = "Errore di inseri  mento"; 
      echo $err;
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
            <h1>Aggiungi punto di consegna</h1>
            <input type="" id="name" placeholder="Nome nuovo punto consegna" name="name" maxlength="50" required>
            <button type="submit" name="login">Invia</button>
        </form>
    </div>
  </body>
</html>