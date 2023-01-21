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
  <title>Sandwech | Ingredienti</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/style.css">
  <link rel="icon" type="image/x-icon" href="../assets/img/logo.png">
</head>

<body>
  <?php require_once(__DIR__.'\navbar.php'); ?>

  <div class="container">
    <div class="row mt-5">
      <h2>Inserisci un nuovo ingrediente:</h2>
    </div>
    <div class="row mt-5">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
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
                <input class="form-control" type="" id="name" placeholder="Nome" name="name"
                  maxlength="50" required>
              </td>
              <td>
                <input class="form-control" type="" id="name" placeholder="Descrizione" name="description"
                  maxlength="50" required>
              </td>
              <td>
                <input class="form-control" type="" id="name" placeholder="Prezzo" name="price"
                  maxlength="50" required>
              </td>
              <td>
                <input class="form-control" type="" id="name" placeholder="Quantità" name="quantity"
                  maxlength="50" required>
              </td>
              <td>
                <button type="submit" class="btn btn-success" name="login">Conferma</button>
              </td>
            </form>
          </tr>
        </tbody>
      </table>
      <?php

                include_once dirname(__FILE__) . '/../function/add.php';

                $err = "";

                //stringa di identificazione del server, quando premi button il metodo diventa post
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $data =array(
                        "name" =>$_POST['name'], 
                        "description" => $_POST['description'], 
                        "price" => $_POST['price'], 
                        "quantity" => $_POST['quantity'], 
                    ); 
                    $ing_arr = addIngredient($data);
                    if (!empty($ing_arr)){
                      echo ('<hr>');
         
                      echo ('<h2>Ecco la tabella degli Ingredienti:</h2>');
              
                      echo ('<table class="table table-striped">');
                      echo ('<thead>');
                      echo ('<tr>');
                      echo ('<th scope="col">');
                      echo ('Nome'); //Nome ingrediente
                      echo ('</th>');
                      echo ('<th scope="col">');
                      echo ('Prezzo'); //Prezzo ingrediente
                      echo ('</th>');
                      echo ('<th scope="col">');
                      echo ('Quantità'); //quantità ingrediente
                      echo ('</th>');
                      echo ('</tr>');
                      echo ('</th>');
              
                      echo ('<tbody>');
                        //trasforma un array di array in una tabella
                        foreach($ing_arr as $row) {
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
                ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
</body>

</html>