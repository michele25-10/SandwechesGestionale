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

function getFavouriteProduct($data){

    $url = "http://localhost/webApp_sandweches/food-api/API/user/favourite/getArchiveFavourite.php?id=" . $data; 

    $json_data = file_get_contents($url);

    $decode_data = json_decode($json_data);

    echo $json_data; 

}

function setOffer($data){

    $url = 'http://localhost/WebApp_sandweches/food-api/API/offer/setProductOffer.php';

    $curl = curl_init($url); //inizializza una nuova sessione di cUrl
    //Curl contiene il return del curl_init 

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // ritorna il risultato come stringa

    $headers = array(
        "Content-Type: application/json",
        "Content-Lenght: 0",
    );

    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); // setta gli headers della request

    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

    $responseJson = curl_exec($curl);

    curl_close($curl);

    $response = json_decode($responseJson);

    return $response;

}


?>