<?php
                        session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sandwech | Preferiti</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/style.css">
  <link rel="icon" type="image/x-icon" href="../assets/img/logo.png">
</head>

<body>
  <?php require_once(__DIR__.'\navbar.php'); ?>

  <div class="container">
    <div class="row mt-5">
      <h2>Visualizza i prodotti preferiti di un utente:</h2>
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
                <input class="form-control" type="" id="id" placeholder="Id dell'utente" name="id"
                  maxlength="50" required>
              </td>
              <td>
                <button type="submit" class="btn btn-success" name="favourite">Cerca</button>
              </td>
            </form>
          </tr>
        </tbody>
      </table>

      <?php     
      include_once dirname(__FILE__) . '/../function/product.php';

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['id'])) {
          $data = $_POST['id'];

          $prod_arr = getFavouriteProduct($data);

          if (!empty($prod_arr) && $prod_arr != -1) {
            echo ('<table class="table table-striped">');
              echo ('<thead>');
                echo ('<tr>');
                  echo ('<th scope="col">');
                    echo ('Prodotto'); //Prodotto
                  echo ('</th>');
                  echo ('<th scope="col">');
                    echo ('ID prodotto'); //Id prodotto
                  echo ('</th>');
                  echo ('<th scope="col">');
                    echo ('Email utente'); //Email dell'utente
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
            echo ('<p class="text-danger fw-bold mt-3 ms-3">Errore, ID utente inesistente, oppure utente non attivo.</p>');
          }

        }
      }

      ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
</body>

</html>