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
            <h1>Aggiungi un nuovo ingrediente</h1>
            <input type="" id="name" placeholder="Nome" name="name" maxlength="50" required>
            <input type="" id="name" placeholder="Descrizione" name="description" maxlength="50" required>
            <input type="" id="name" placeholder="prezzo" name="price" maxlength="50" required>
            <input type="" id="name" placeholder="Quantità" name="quantity" maxlength="50" required>
            <button type="submit" name="allergeni">Invia</button>
        </form>
    </div>
  </body>
</html>

<?php
session_start();

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
        echo('<table>');
        echo('<tr>'); 
        echo('<td>Nome</td><td>Prezzo</td><td>Quantità</td>'); 
        echo('</tr>'); 
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