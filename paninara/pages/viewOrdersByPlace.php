<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sandwech | Ordini</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="icon" type="image/x-icon" href="assets/img/logo.png">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="#">
                    <img src="assets/img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top me-2">
                    Sandwech
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="viewAllProducts.php">Prodotti</a>
                        </li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Ordini
                            </a>
                            <ul class="dropdown-menu">
                                <!-- <li><a class="dropdown-item" href="#">Tutti gli Ordini</a></li> -->
                                <li><a class="dropdown-item" href="viewAllOrders.php">Ordini attivi</a></li>
                                <li><a class="dropdown-item" href="viewOrdersByClass.php">Ordini attivi per classe</a></li>
                                <li><a class="dropdown-item" href="viewOrdersByPlace.php">Ordini attivi per consegna</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Cerca un ordine..." aria-label="Search">
                        <button class="btn btn-outline-primary me-4" type="submit">Cerca</button>
                    </form>
                    <form class="d-flex" role="search">
                        <button class="btn btn-outline-primary" type="submit">Esci</button>
                    </form>
                </div>
            </div>
        </nav>
  
        <div class="container">
            <div class="row mt-5">
            <h2>Tabella punti di consegna:</h2>
            <br>
            <br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
<?php

session_start();    

include_once dirname(__FILE__) . '/../function/order.php';

$pick_arr = getPickup();
if (!empty($pick_arr) && $pick_arr != -1){
    foreach ($pick_arr as $row) {
        //ogni elemento dell'array è un array a sua volta, per la precisione una riga della tabella
        echo ('<tr>');
        foreach ($row as $cell) {
            //ogni elemento della riga è finalmente una cella
            echo ('<td>' . $cell . '</td>');
        }  
        echo ("</tr>\n");
    }
    echo('</tbody>'); 
    echo ('</table>');
}
else{
      echo ('<p>Il nome del punto di consegna da lei inserito è inesistente</p>'); 
}
?>


                <h2>Inserisci ID del punto di consegna interessato:</h2>
                <form class="d-flex" role="search">
                        <input class="form-control me-2" type="input" placeholder="Cerca gli ordini di un punto di consegna..." aria-label="Search" name="id">
                        <button class="btn btn-outline-primary me-4" type="submit">Cerca</button>
                    </form>
            </div>
<?php         

include_once dirname(__FILE__) . '/../function/order.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['id'])) {
      $data = $_POST['id'];
      $response = getPickup();
      if (!empty($response) && $response != -1){
        echo ('<p>' . $response . '</p>'); 
      }
      else{
            echo ('<p>Il nome del punto di consegna da lei inserito è inesistente</p>'); 
      }
    }
    else{
        echo ('<p>devi inserire qualcosa</p>'); 
    }
}
?>
            <div class="row mt-5">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Utente</th>
                            <th scope="col">Creato</th>
                            <!-- <th scope="col">Ritiro</th> -->
                            <th scope="col">Orario</th>
                            <th scope="col">Stato</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>1</td>
                            <td>01/01/2023</td>
                            <!-- <td>Atrio</td> -->
                            <td>10:30</td>
                            <td>?</td>
                            <td>
                                <button type="button" class="btn btn-primary">Completato</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>1</td>
                            <td>01/01/2023</td>
                            <!-- <td>Atrio</td> -->
                            <td>10:30</td>
                            <td>?</td>
                            <td>
                                <button type="button" class="btn btn-primary">Completato</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
