<?php

session_start(); 
if(empty($_SESSION['user_id'])){
    header('location: ../login.php'); 
}

?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sandwech | Prodotti</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="icon" type="image/x-icon" href="assets/img/logo.png">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="#">
                    <img src="../assets/img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top me-2">
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
                            <a class="nav-link active" href="viewAllProducts.php">Prodotti</a>
                        </li>
                        <li class="nav-item dropdown">
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
                    <a href="../function/logout.php">
                        <button class="btn btn-outline-primary">Esci</button>
                    </a>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row mt-5">
                <h2>Ecco tutti i prodotti</h2>
            </div>
            <div class="row mt-5">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Quantità</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                          
<?php

        include_once dirname(__FILE__) . '/../function/product.php';

        $prod_arr = getProductArchive();
        if (!empty($prod_arr) && $prod_arr != -1) {
            foreach ($prod_arr as $row) {
                //ogni elemento dell'array è un array a sua volta, per la precisione una riga della tabella
                echo ('<tr>');
                foreach ($row as $cell) {
                    //ogni elemento della riga è finalmente una cella
                    echo ('<td>' . $cell . '</td>');
                }
                echo ('<td>
                <a href="productQuantity.php?ID='.$row['ID'].'&product_qty='.$row['quantity'].'">
                <button type="button" id = "productButton" class="btn btn-primary">Modifica</button>
                </td>');
               

                echo ("</tr>\n");
            }
            echo ('</table>');
        } else {
            echo ('<p>Errore, i prodotti non sono presenti nel db</p>');
        }
?>
                    </tbody>
                </table>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
