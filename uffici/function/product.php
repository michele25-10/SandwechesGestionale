<?php

function getProductArchive(){
    $url = 'http://localhost/webApp_sandweches/food-api/API/product/getArchiveProducts.php';

    $json_data = file_get_contents($url);

    $decode_data = json_decode($json_data);

//    echo ("\n".$json_data); 

    $product_data = $decode_data;
}

function setProduct($data){
    $name = $data['name'];
    $price = $data['price'];
    $description = $data['description'];
    $quantity = $data['quantity'];    
    $nutritional_value = $data['nutritional_value']; 
    $active = $data['active']; 


    $url = 'http://localhost/webApp_sandweches/food-api/API/product/setProduct.php?name='.$name.'&price='.$price.'&description='.$description.'&quantity='.$quantity.'&nutritional_value='.$nutritional_value.'&active='.$active; 

    $json_data = file_get_contents($url);

    $decode_data = json_decode($json_data, $assoc = true);
    $prod_data = $decode_data;
    $prod_arr = array();

    foreach ($prod_data as $prod) {
        $prod_record = array(
            'id' => $prod['id'],
            'name' => $prod['name'],
            'quantity' => $prod['quantity'],
            'kcal' => $prod['kcal'],
        );
        array_push($prod_arr, $prod_record);
    }

    return $prod_arr; 

   
}

function getFavouriteProduct($data){

    $url = "http://localhost/webApp_sandweches/food-api/API/user/favourite/getArchiveFavourite.php?id=" . $data; 

    $json_data = file_get_contents($url);

    $decode_data = json_decode($json_data, $assoc = true);
    $product_data = $decode_data;
    $product_arr = array();

    foreach ($product_data as $prod) {
        $product_record = array(
            'product' => $prod['product'],
            'id_product' => $prod['id_product'],
            'email' => $prod['email'],
        );
        array_push($product_arr, $product_record);
    }

    return $product_arr;

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
    
    return $response->message; 

}

function putProductQuantity($data){

    $url = 'http://localhost/webApp_sandweches/food-api/API/product/putProductQuantity.php';

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

    $data = json_encode($data);

    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

    $responseJson = curl_exec($curl);

    curl_close($curl);

    $response = json_decode($responseJson);

    return $response;

}


?>