

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
              <br>
              <br>
              <br>
            </form>
            
        </form>
    </div>
  </body>
</html>
<?php
session_start();

include_once dirname(__FILE__) . '/../function/cart.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!empty($_POST['id'])) {
    $data = $_POST['id'];

    $cart_arr = viewCart($data);  

    if(!empty($cart_arr)){
      //trasforma un array di array in una tabella
      echo('<table>');
      foreach($cart_arr as $row) {
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
  } 
  }
 
?>