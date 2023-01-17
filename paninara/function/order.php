<?php

function viewOrder(){

    $url = 'http://localhost/WebApp_sandweches/food-api/API/order/getArchiveOrderPaninara.php';
    
    $json_data = file_get_contents($url);
    if($json_data != false){
      $decode_data = json_decode($json_data, $assoc=true);
      $order_data = $decode_data;

    if (!empty($order_data)) {
      $order_arr = array();

      foreach ($order_data as $order) {
        $order_record = array(
          'id' => $order['id'],
          'user' => $order['user'],
          'created' => $order['created'],
          'pickup' => $order['pickup'],
          'break' => $order['break'],
          'status' => $order['status'],
        );
        array_push($order_arr, $order_record);
      }

      return $order_arr;
    }else{
      return -1; 
    }
    }else{
      return -1; 
    }
}

function getArchiveOrderByClass(){

  $url = 'http://localhost/WebApp_sandweches/food-api/API/order/getOrdersByClassandBreak.php';
    
    $json_data = file_get_contents($url);

    if($json_data != false){
      $decode_data = json_decode($json_data, $assoc=true);
      $order_data = $decode_data;

    if (!empty($order_data)) {
      $order_arr = array();

      foreach ($order_data as $order) {
        $order_record = array(
          'id' => $order[0],
          'year' => $order[1],
          'section' => $order[2],
          'created' => $order[3],
          'pickup' => $order[4],
          'break' => $order[5],
          'status' => $order[6],
        );
        array_push($order_arr, $order_record);
      }

      return $order_arr;
    }else{
      return -1; 
    }
    }else{
      return -1; 
    }
}

function getPickup(){
  $url = 'http://localhost/WebApp_sandweches/food-api/API/order/pickup/getPickup.php';
  
  $json_data = file_get_contents($url);

  if($json_data != false){
    $decode_data = json_decode($json_data, $assoc=true);
    $pickup_data = $decode_data;
    if (!empty($pickup_data)) {
      $pickup_arr = array();

      foreach ($pickup_data as $pick) {
        $pickup_record = array(
          'id' => $pick['id'],
          'name' => $pick['name'],
        );
        array_push($pickup_arr, $pickup_record);
      }

      return $pickup_arr;
    }else{
    return -1; 
  }
  }else{
    return -1; 
  }
}

function getPickupOrder($data){
  $url = 'http://localhost/WebApp_sandweches/food-api/API/order/pickup/getPickupId.php?id='.$data;
  
  $json_data = file_get_contents($url);

  if($json_data != false){
    $decode_data = json_decode($json_data, $assoc=true);
    $order_data = $decode_data;
    if (!empty($order_data)) {
      $order_arr = array();

      foreach ($order_data as $order) {
        $order_record = array(
          'id' => $order['id'],
          'user' => $order['user'],
          'created' => $order['created'],
          'pickup' => $order['pickup'],
          'break' => $order['break'],
          'status' => $order['status'],
        );
        array_push($order_arr, $order_record);
      }

      return $order_arr;
    }else{
    return -1; 
  }
  }else{
    return -1; 
  }
}

function getProductOrder($id_order){
  $url = 'http://localhost/WebApp_sandweches/food-api/API/order/getProductsOrders.php?id='.$id_order;

  $json_data = file_get_contents($url);

  if($json_data != false){
    $decode_data = json_decode($json_data, $assoc=true);
    $prod_data = $decode_data;
    if (!empty($prod_data)) {
      $prod_arr = array();

      foreach ($prod_data as $prod) {
        $prod_record = array(
          'id' => $prod[0],
          'name' => $prod[1],
          'quantity' => $prod[2],
          'price' => $prod[3],
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

function setStatus($data){
  $url = 'http://localhost/webApp_sandweches/food-api/API/order/status/setStatus.php';

        $curl = curl_init($url);    //inizializza una nuova sessione di cUrl
        //Curl contiene il return del curl_init 

        curl_setopt($curl, CURLOPT_URL, $url); // setta l'url 
        curl_setopt($curl, CURLOPT_POST, true); // specifica che è una post request
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // ritorna il risultato come stringa

        $headers = array(
            "Content-Type: application/json",
            "Content-Lenght: 0",
        );

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); // setta gli headers della request

        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

        $responseJson = curl_exec($curl);   //eseguo

        curl_close($curl);  //chiudo sessione

        $response = json_decode($responseJson);     //decodifico la response dal json

        if ($response == 1)        //response == true vuol dire sessione senza errori
        {
          return 1; 
        }
        else
        {
            return -1; 
        }
    }

?>