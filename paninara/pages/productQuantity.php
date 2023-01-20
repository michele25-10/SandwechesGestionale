<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sandwech | prodottiQuantità </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js/custom.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">
                <img src="../assets/img/logo.png" alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-top me-2">
                Sandwech
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                            <li><a class="dropdown-item" href="viewAllOrders.php">Ordini attivi</a></li>
                            <li><a class="dropdown-item" href="viewOrdersByClass.php">Ordini attivi per classe</a></li>
                            <li><a class="dropdown-item" href="viewOrdersByPlace.php">Ordini attivi per consegna</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cerca un ordine..." aria-label="Search">
                    <button class="btn btn-outline-primary me-4" type="submit">Cerca</button>
                </form>
                <a href="../function/logout.php">
                    <button class="btn btn-outline-primary">Esci</button>
                </a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-5">
            <div class="col-6">
                <div class="mycontent-left">
                    <h2>Modifca quantità prodotto</h2>
                    </br>
                    <form method="post" name="quantità">
                        <div class="input-group" style="width:200px">

                            <input type="text" class="form-control" aria-label="Quantità totale" name="quantity"
                                placeholder="Quantità totale">
                            <button type="submit" class="btn btn-outline-success">Invia</button>
                        </div>
                </div>
                <?php
                //stringa di identificazione del server, quando premi button il metodo diventa post
                include_once dirname(__FILE__) . '/../function/product.php';
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $quantity = $_POST['quantity'];

                    if (isset($quantity) && $_POST['qty'] == "0") {

                        if ($quantity == -69) {
                            header('Location: static/albi.jpeg');
                        } else {


                            if ($quantity > 0) {
                                $data = array(
                                    "ID" => $_GET['ID'],
                                    "quantity" => $quantity,
                                    "action" => "set",
                                );
                                $response = putProductQuantity($data);

                                if (!empty($response->Message)) {
                                    echo ('
                                    </br>
                                    <p class="text-success">' . $response->Message . '</p>');
                                }
                            } else {
                                echo ('<p class = "text-danger">Inserisci quantità positive</p>');
                            }
                        }
                    }

                }
                ?>
            </div>
            <div class="col-6">
                <h2>Vendita</h2>
                </br>
                <div class="input-group quantity" style="width: 150px">
                    <div class="input-group-prepend decrement-btn" style="cursor: pointer">
                        <span class="input-group-text text-white" style="background-color: #dc3545">-</span>
                    </div>
                    <input type="text" name="qty" class="qty-input form-control" maxlength="3" max="50" value="0" >
                    <div class="input-group-append  increment-btn" style="cursor: pointer">
                        <span class="input-group-text text-white" style="background-color: #28a745">+</span>
                    </div>
                </div>
                <br>
                <button class="btn btn-outline-success" type="submit">Invia</button>
            </form>

<?php

            include_once dirname(__FILE__) . '/../function/product.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $qty = $_POST['qty'];
$product_qty  = $_GET['product_qty'];
if($product_qty + $qty < 0 ){
    echo ('<p class = "text-danger">Quantità venduta supera quantità in magazzino</p>');
}
else{
    if ($quantity == "" && $qty != "0") {
        $data = array(
            "ID" => $_GET['ID'],
            "quantity_prod" => $_GET['product_qty'],
            "qty" => $qty,
            "action" => "set",
        );
        $response = incrementDecrementQty($data);

        if (!empty($response->Message)) {
        echo ('
        </br>
        <p class="text-success">' . $response->Message . '</p>');
        }
        } else {
        echo ('<p class = "text-danger">Inserisci quantità positive</p>');
        }
} 
    }
                    
?>

        </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
</body>

</html>