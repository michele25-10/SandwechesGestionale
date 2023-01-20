
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sandwech</title>
  </head>
  <body>

    <div class="container-fluid">
    <?php
session_start();

include_once dirname(__FILE__) . '/../function/getOrder.php';

    $order_arr = viewOrder(); 

    if(!empty($order_arr) && $order_arr != -1){
      echo('<table>');
      echo('<tr>'); 
      echo('<td>ID ordine</td><td>ID user</td><td>Creazione</td><td>Punto consegna ID</td><td>Intervallo id</td><td>Id status</td><td>json</td>'); 
      echo('</tr>'); 
      //trasforma un array di array in una tabella
      foreach($order_arr as $row) {
          //ogni elemento dell'array è un array a sua volta, per la precisione una riga della tabella
          echo('<tr>');
          foreach($row as $cell) {
              //ogni elemento della riga è finalmente una cella
              echo('<td>'.$cell.'</td>');
          }
          echo("</tr>\n");
      }
      echo('</table>');
    }else{
      echo ('<p>Nessun ordine presente</p>'); 
    }
 
?>
    </div>
  </body>
</html>
