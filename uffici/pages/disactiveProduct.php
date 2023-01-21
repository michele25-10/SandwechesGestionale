<?php

session_start(); 
if(empty($_SESSION['user_id'])){
    header('location: ../index.php'); 
}

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
      <h2>Disattiva un prodotto:</h2>
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
                <button type="submit" class="btn btn-danger" name="product">Disabilita</button>
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

      <?php
      include_once dirname(__FILE__) . '/../function/product.php';
      $prod_arr = getProductArchive();
      if (!empty($prod_arr) && $prod_arr != -1) {
        echo ('<hr>');

        echo ('<h2>Ecco la tabella dei prodotti</h2>');

        echo ('<table class="table table-striped">');
          echo ('<thead>');
            echo ('<tr>');
              echo ('<th scope="col">');
                echo ('ID'); //Id
              echo ('</th>');
              echo ('<th scope="col">');
                echo ('Nome'); //Nome
              echo ('</th>');
              echo ('<th scope="col">');
                echo ('Prezzo'); //Prezzo
              echo ('</th>');
              echo ('<th scope="col">');
                echo ('Tag'); //Tag
              echo ('</th>');
            echo ('</tr>');
          echo ('</th>');

          echo ('<tbody>');

          foreach ($prod_arr as $row) {
            echo ('<tr>');

            foreach ($row as $cell) {
              echo ('<th scope="row">' . $cell . '</th>');
            }

            echo ("</tr>\n");
          }
          echo ('</tb>');
          echo ('</table>');
        } else {
          echo ('<p class="text-danger fw-bold mt-3 ms-3">Errore, i prodotti non sono presenti nel db</p>');
        }
      ?>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
</body>

</html>