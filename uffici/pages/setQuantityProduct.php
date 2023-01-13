<?php
session_start();

include_once dirname(__FILE__) . '/../function/product.php';

getProductArchive();

$err = "";

//stringa di identificazione del server, quando premi button il metodo diventa post 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $data = array(
        "name" => $_POST['name'],
        "price" => $_POST['price'],
        "description" => $_POST['description'], 
        "quantity" => $_POST['quantity'],
        "nutritional_value" => $_POST['nutritional_value'],
        "active" => $_POST['active'], 
        ); 

        var_dump($data); 
        
      if(setQuantityProduct($data) == -1){
            $err = "Errore dell'API"; 
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
            <h1>Inserisci quantita del prodotto</h1>
            <input type="" id="name" placeholder="Nome del prodotto" name="name" maxlength="50" required>
            <input type="" id="name" placeholder="Prezzo" name="price" maxlength="50" required>
            <input type="" id="name" placeholder="descrizione" name="description" maxlength="50" required>
            <input type="" id="quantity" placeholder="Quantità" name="quantity" maxlength="50" required>    
            <input type="" id="name" placeholder="Id prodotti nutrizionali" name="nutritional_value" maxlength="50" required> 
            <input type="" id="name" placeholder="Attivo" name="active" maxlength="50" required>
            <button type="submit" name="addProduct">Invia</button>
        </form>
    </div>
  </body>
</html>