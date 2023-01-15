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
            <h1>Riattiva prodotto</h1>
            <input type="" id="name" placeholder="Id prodotto" name="product_id" maxlength="50" required>
            <button type="submit" name="product">Invia</button>
        </form>

<?php
include_once dirname(__FILE__) . '/../function/product.php';

//stringa di identificazione del server, quando premi button il metodo diventa post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!empty($_POST['product_id'])) {
    $data = $_POST['product_id'];

    $response = reactiveProduct($data);
    
    if(!empty($response) && $response == 1){
      echo ('<p>Prodotto Riattivato</p>'); 
    }
  }
}
?>

<?php

session_start();

include_once dirname(__FILE__) . '/../function/product.php';

$prod_arr = getProductArchive(); 
if(!empty($prod_arr)){
  echo ('<hr>'); 
  echo ('<h3>Tabella prodotti</h3>'); 
  echo('<table>');
      echo('<tr>'); 
      echo('<td>ID prodotto</td><td>Nome prodotto</td><td>Prezzo</td><td>Tag</td>'); 
      echo('</tr>');  
      foreach($prod_arr as $row) {
          //ogni elemento dell'array è un array a sua volta, per la precisione una riga della tabella
          echo('<tr>');
          foreach($row as $cell) {
              //ogni elemento della riga è finalmente una cella
              echo('<td>'.$cell.'</td>');
          }
          echo("</tr>\n");
      }
      echo('</table>');
}

?>

      </div>
  </body>
</html>