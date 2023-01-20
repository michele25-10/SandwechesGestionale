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
            <h1>Disattiva prodotto</h1>
            <input type="" id="name" placeholder="Id prodotto" name="product_id" maxlength="50" required>
            <button type="submit" name="product">Invia</button>
        </form>

<?php
session_start();

include_once dirname(__FILE__) . '/../function/product.php';

//stringa di identificazione del server, quando premi button il metodo diventa post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!empty($_POST['product_id'])) {
    $data = $_POST['product_id'];

    $response = disactiveProduct($data);
    
    if(!empty($response) && $response == 1){
      echo ('<p>Prodotto eliminato</p>'); 
    }
  }
}
?>

<?php

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

?>

      </div>
  </body>
</html>



<?php
                        session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sandwech | Prodotti</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/style.css">
  <link rel="icon" type="image/x-icon" href="../assets/img/logo.png">
</head>

<body>
  <?php require_once(__DIR__.'\navbar.php'); ?>

  <div class="container">
    <div class="row mt-5">
      <h2>Disattiva un prodotto</h2>
    </div>
    <div class="row mt-5">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"></th>
            <form method="post">
              <td>
                <input class="form-control" type="" id="id" placeholder="Id del prodotto" name="product_id"
                  maxlength="50" required>
              </td>
              <td>
                <button type="submit" class="btn btn-success" name="product">Conferma</button>
                <?php
                include_once dirname(__FILE__) . '/../function/product.php';

                //stringa di identificazione del server, quando premi button il metodo diventa post
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                  if (!empty($_POST['product_id'])) {
                    $data = $_POST['product_id'];

                    $response = disactiveProduct($data);
                    
                    if(!empty($response) && $response == 1){
                      echo ('<p class="text-success fw-bold mt-3 ms-3">Prodotto eliminato</p>'); 
                    }
                  }
                }
                ?>
              </td>
            </form>
          </tr>
        </tbody>
      </table>

      <table class="table table-striped">

      </table>
      <?php
      include_once dirname(__FILE__) . '/../function/product.php';

      $prod_arr = getProductArchive(); 
      if(!empty($prod_arr)&&$prod_arr != -1){
        echo ('<hr>'); 
        echo ('<h2>Ecco la tabella dei prodotti</h2>'); 
        echo('<table class="table table-striped">');
          echo('<thread>');
            echo('<tr>');
              echo('<th scope="col">');
                echo('ID');
              echo('</th>');
              echo('<th scope="col">');
                echo('Nome');
              echo('</th>');
              echo('<th scope="col">');
                echo('ID');
              echo('</th>');
            echo('</tr>');
          echo('</tr>'); 




          
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

      ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
</body>

</html>