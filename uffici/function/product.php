<?php

function getProductArchive(){
    $url = 'http://localhost/webApp_sandweches/food-api/API/product/getArchiveProducts.php';

    $json_data = file_get_contents($url);

    $decode_data = json_decode($json_data);

    echo $json_data; 

    $product_data = $decode_data;
}

function setQuantityProduct($data){

}



?>