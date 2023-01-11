<?php

function addPickup($data){
    $url = 'http://localhost/webApp_sandweches/food-api/API/order/pickup/addPickup.php';

    $curl = curl_init($url);    //inizializza una nuova sessione di cUrl
    //Curl contiene il return del curl_init 

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    
    $headers = array(
        "Content-Type: application/json",
        "Content-Lenght: 0",
    );

    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); // setta gli headers della request

    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

    $responseJson = curl_exec($curl);   //eseguo

    curl_close($curl);  //chiudo sessione

}

?>