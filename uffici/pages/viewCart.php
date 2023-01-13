<?php
session_start();

include_once dirname(__FILE__) . '/../function/cart.php';

$data = 1;
      viewCart($data);   
  
  ?>

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
            <p>
                <?php
                    
                    

                ?>
            </p>
        </form>
    </div>
  </body>
</html>