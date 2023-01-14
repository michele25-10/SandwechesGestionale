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
            <h1>Inserisci informazioni prodotto</h1>
            <input type="" id="name" placeholder="Nome del prodotto" name="name" maxlength="50" required>
            <input type="" id="name" placeholder="Prezzo" name="price" maxlength="50" required>
            <input type="" id="name" placeholder="descrizione" name="description" maxlength="50" required>
            <input type="" id="quantity" placeholder="Quantità" name="quantity" maxlength="50" required>    
            <input type="" id="name" placeholder="Id prodotti nutrizionali" name="nutritional_value" maxlength="50" required> 
            <input type="" id="name" placeholder="Attivo" name="active" maxlength="50" required>
            <button type="submit">Invia</button>
        </form>

<?php
session_start();

include_once dirname(__FILE__) . '/../function/product.php';

$allergen_arr = getAllergen();
if(!empty($allergen_arr)){
  echo ('<hr>');
  echo ('<h3>Lista Allergeni</h3>'); 
  echo('<table>');
    echo('<tr>'); 
    echo('<td>ID allergeno</td><td>Nome Allergeno</td>'); 
    echo('</tr>');  
    foreach($allergen_arr as $row) {
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

$tag_arr = getTag();
if(!empty($tag_arr)){
  echo ('<hr>');
  echo ('<h3>Lista Tag</h3>'); 
  echo('<table>');
    echo('<tr>'); 
    echo('<td>ID Tag</td><td>Nome Tag</td>'); 
    echo('</tr>');  
    foreach($tag_arr as $row) {
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
        "name" => $_POST['name'],
        "price" => $_POST['price'],
        "description" => $_POST['description'], 
        "quantity" => $_POST['quantity'],
        "nutritional_value" => $_POST['nutritional_value'],
        "active" => $_POST['active'], 
        );

  $prod_arr = setProduct($data); 
  
  if(!empty($prod_arr)){
    echo('<table>');
    echo('<tr>'); 
    echo('<td>ID prodotto</td><td>Nome</td><td>quantità</td><td>Kcal</td>'); 
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
  }
    
}
?>



      </div>
    </body>
</html>