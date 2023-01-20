<?php
                        session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sandwech | Ordini</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/style.css">
  <link rel="icon" type="image/x-icon" href="../assets/img/logo.png">
</head>

<body>
  <?php require_once(__DIR__.'\navbar.php'); ?>

  <div class="container">
    <div class="row mt-5">
      <h2>Ecco la lista degli ordini::</h2>
    </div>
    <div class="row mt-5">
      <?php
      include_once dirname(__FILE__) . '/../function/getOrder.php';
      $order_arr = viewOrder();
      if (!empty($order_arr) && $order_arr != -1) {

        // echo ('<h2>Ecco la tabella degli ordini:</h2>');

        echo ('<table class="table table-striped">');
          echo ('<thead>');
            echo ('<tr>');
              echo ('<th scope="col">');
                echo ('ID Ordine'); //Id ordine
              echo ('</th>');
              echo ('<th scope="col">');
                echo ('ID Utente'); //Id utente
              echo ('</th>');
              echo ('<th scope="col">');
                echo ('Creazione'); //Creazione
              echo ('</th>');
              echo ('<th scope="col">');
                echo ('Ritiro'); //Punto di ritiro
              echo ('</th>');
              echo ('<th scope="col">');
                echo ('Orario'); //Intervallo di ritiro
              echo ('</th>');
              echo ('<th scope="col">');
                echo ('Stato'); //Id dello stato
              echo ('</th>');
              echo ('<th scope="col">');
                echo ('Json'); //Json
              echo ('</th>');
            echo ('</tr>');
          echo ('</th>');

          echo ('<tbody>');

          foreach ($order_arr as $row) {
            echo ('<tr>');

            foreach ($row as $cell) {
              echo ('<th scope="row">' . $cell . '</th>');
            }

            echo ("</tr>\n");
          }
          echo ('</tb>');
          echo ('</table>');
        } else {
          echo ('<p class="text-danger fw-bold mt-3 ms-3">Nessun ordine presente.</p>');
        }
      ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
</body>

</html>
