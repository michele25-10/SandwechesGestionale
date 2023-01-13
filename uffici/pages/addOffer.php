<?php
session_start();

include_once dirname(__FILE__) . '/../function/add.php';

$err = "";

//stringa di identificazione del server, quando premi button il metodo diventa post 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $data = array(
        "price" => $_POST['price'],
        "start" => $_POST['start'],
        "expiry" => $_POST['expiry'],
        "description" => $_POST['description'], 
        );

    addOffer($data); 
    
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
            <h1>Inserisci quantita del prodotto</h1>
            <input type="" id="name" placeholder="Prezzo" name="price" maxlength="50" required>
            <input type="" id="name" placeholder="Data inizio" name="start" maxlength="50" required>
            <input type="" id="name" placeholder="Data fine" name="expiry" maxlength="50" required>
            <input type="" id="quantity" placeholder="Descrizione" name="description" maxlength="50" required>    
            <button type="submit" name="addProduct">Invia</button>
        </form>
    </div>
  </body>
</html>