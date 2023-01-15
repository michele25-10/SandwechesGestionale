<?php

function getProductArchive(){
    $url = 'http://localhost/webApp_sandweches/food-api/API/product/getArchiveProducts.php';

    $json_data = file_get_contents($url);
    if($json_data != false){
        $decode_data = json_decode($json_data, $assoc = true);
        $prod_data = $decode_data;
        $prod_arr = array();
        if (!empty($prod_data)) {
            foreach ($prod_data as $prod) {
                $prod_record = array(
                    'ID' => $prod['ID'],
                    'name' => $prod['Nome prodotto'],
                    'price' => $prod['Prezzo'],
                    'tag' => $prod['Tag'],
                );
                array_push($prod_arr, $prod_record);
            }

            return $prod_arr;
        }else{
            return -1; 
        }
    }else{
        return -1; 
    }
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

function getArchiveOffer(){
    $url = 'http://localhost/webApp_sandweches/food-api/API/offer/getArchiveOffer.php';

    $json_data = file_get_contents($url);

    $decode_data = json_decode($json_data, $assoc = true);
    $off_data = $decode_data;
    $off_arr = array(); 

    foreach ($off_data as $off) {
        $off_record = array(
            'id' => $off['id'],
            'price' => $off['price'],
            'start' => $off['start'],
            'expiry' => $off['expiry'],
            'description' => $off['description'],
        );
        array_push($off_arr, $off_record);
    }

    return $off_arr;
}

function getFavouriteProduct($data){

    $url = "http://localhost/webApp_sandweches/food-api/API/user/favourite/getArchiveFavourite.php?id=" . $data; 

    $json_data = file_get_contents($url);
    if($json_data!=false){
        $decode_data = json_decode($json_data, $assoc = true);
        $product_data = $decode_data;
        $product_arr = array();
        if(empty($product_data->message)){
            foreach ($product_data as $prod) {
                $product_record = array(
                    'product' => $prod['product'],
                    'id_product' => $prod['id_product'],
                    'email' => $prod['email'],
                );
                array_push($product_arr, $product_record);
            }
        
            return $product_arr;
        }else{
            $res = "Errore"; 
            return $res; 
        }
    }
    else{
        $res =-1; 
        return $res; 
    }

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

function getAllergen(){
    $url = 'http://localhost/webApp_sandweches/food-api/API/allergen/getArchiveAllergen.php';

    $json_data = file_get_contents($url);

    $decode_data = json_decode($json_data, $assoc = true);
    $allergen_data = $decode_data;
    $all_arr = array();

    foreach ($allergen_data as $all) {
        $allergen_record = array(
            'id' => $all['id'],
            'name' => $all['name'],
        );
        array_push($all_arr, $allergen_record);
    }

    return $all_arr;
}

function getTag(){
    $url = 'http://localhost/webApp_sandweches/food-api/API/tag/getArchiveTag.php';

    $json_data = file_get_contents($url);

    $decode_data = json_decode($json_data, $assoc = true);
    $tag_data = $decode_data;
    $tag_arr = array();

    foreach ($tag_data as $tag) {
        $tag_record = array(
            'id' => $tag['id'],
            'name' => $tag['name'],
        );
        array_push($tag_arr, $tag_record);
    }

    return $tag_arr;
}

function setAllergenProduct($data, $prod_id){
    $url = 'http://localhost/webApp_sandweches/food-api/API/allergen/setProductAllergen.php';

    $req = array(
        "product" => $prod_id, 
        "allergen" => $data['allergen'],
    ); 


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

    $req = json_encode($req);

    curl_setopt($curl, CURLOPT_POSTFIELDS, $req);

    $responseJson = curl_exec($curl);

    curl_close($curl);

    $response = json_decode($responseJson);

    return $response;
}

function setTagProduct($data, $prod_id){

    $url = 'http://localhost/webApp_sandweches/food-api/API/tag/product-tag/setProductTag.php';

    $req = array(
        "product_id" => $prod_id, 
        "tag_id" => $data['tag'],
    ); 


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

    $req = json_encode($req);

    curl_setopt($curl, CURLOPT_POSTFIELDS, $req);

    $responseJson = curl_exec($curl);

    curl_close($curl);

    $response = json_decode($responseJson);

    return $response;
}


function disactiveProduct($data){
    $url = 'http://localhost/webApp_sandweches/food-api/API/product/deleteProduct.php?product_id='.$data;

    $json_data = file_get_contents($url);
    if ($json_data != false) {
        $decode_data = json_decode($json_data, $assoc = true);

        return $decode_data;
    }else{
        return "Errore, prodotto inesistente"; 
    }
}

function reactiveProduct($data){
    $url = 'http://localhost/webApp_sandweches/food-api/API/product/reactiveProduct.php?product_id='.$data;

    $json_data = file_get_contents($url);
    if ($json_data != false) {
        $decode_data = json_decode($json_data, $assoc = true);

        return $decode_data;
    }else{
        return "Errore, prodotto inesistente"; 
    } 
}

?>