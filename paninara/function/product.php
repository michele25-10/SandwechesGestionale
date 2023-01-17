<?php

function getProductArchive(){
    $url = 'http://localhost/webApp_sandweches/food-api/API/product/getArchiveProductsPaninara.php';

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
                    'quantity' => $prod['Quantita'],
                    'Price' => $prod['Prezzo'],
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

function deleteOne($id){
    
}

function addOne($id){

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

