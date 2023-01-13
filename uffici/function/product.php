<?php

function getProductArchive(){
    $url = 'http://localhost/webApp_sandweches/food-api/API/product/getArchiveProducts.php';

    $json_data = file_get_contents($url);

    $decode_data = json_decode($json_data);

//    echo ("\n".$json_data); 

    $product_data = $decode_data;
}

function setQuantityProduct($data){
    $name = $data['name'];
    $price = $data['price'];
    $description = $data['description'];
    $quantity = $data['quantity'];    
    $nutritional_value = $data['nutritional_value']; 
    $active = $data['active']; 


    $url = 'http://localhost/webApp_sandweches/food-api/API/product/setProduct.php?name='.$name.'&price='.$price.'&description='.$description.'&quantity='.$quantity.'&nutritional_value='.$nutritional_value.'&active='.$active; 

    $json_data = file_get_contents($url);

    $decode_data = json_decode($json_data);

    echo $json_data; 
}



?>