<?php
session_start();

include_once dirname(__FILE__) . '/../function/product.php';

$err = "";

//stringa di identificazione del server, quando premi button il metodo diventa post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data = array(
        "ID"=>$_POST['product'],
        "quantity"=>$_POST['quantity'], 
        "action"=>"set", 
    );

    putProductQuantity($data);

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
            <h1>Aggiungi un nuovo</h1>
            <input type="" id="name" placeholder="Id prodotto" name="product" maxlength="50" required>
            <input type="" id="name" placeholder="Quantità totale" name="quantity" maxlength="50" required>
            <button type="submit" name="user">Invia</button>
        </form>
    </div>
  </body>
</html>