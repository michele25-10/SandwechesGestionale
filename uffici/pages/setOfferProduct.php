

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
            <input type="" id="name" placeholder="Id prodotto" name="product" maxlength="50" required>
            <input type="" id="name" placeholder="Id offerta" name="offer" maxlength="50" required>
            <button type="submit" name="addProductOffer">Invia</button>
        </form>
        <?php
session_start();

include_once dirname(__FILE__) . '/../function/product.php';

$prod_arr = getProductArchive(); 
if(!empty($prod_arr)&&$prod_arr != -1){
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
}else{
  echo ('<p>Errore, i prodotti non sono presenti nel db</p>'); 
}

$off_arr = getArchiveOffer(); 

if(!empty($off_arr)){
  echo ('<hr>'); 
  echo ('<h3>Tabella Offerte</h3>'); 
  echo('<table>');
      echo('<tr>'); 
      echo('<td>ID offerta</td><td>Prezzo</td><td>Data di inizio</td><td>Data di fine</td><td>Descrizione</td>'); 
      echo('</tr>');  
      foreach($off_arr as $row) {
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

//stringa di identificazione del server, quando premi button il metodo diventa post 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $data = array(
        "product" => $_POST['product'],
        "offer" => $_POST['offer'],
        );

    $response = setOffer($data);
    if(!empty($response)){
      echo ('<p>' . $response . '</p>'); 
    }
}
?>
    </div>
  </body>
</html>

