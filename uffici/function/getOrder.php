<?php

function viewOrder(){

    $url = 'http://localhost/WebApp_sandweches/food-api/API/order/getArchiveOrder.php';
    
    $json_data = file_get_contents($url);

    $decode_data = json_decode($json_data, $assoc=true);
    $order_data = $decode_data;
    $order_arr=array();

    foreach ($order_data as $order) {
      $order_record = array(
        'id' => $order['id'],
        'user' => $order['user'],
        'created' => $order['created'], 
        'pickup' => $order['pickup'], 
        'break' => $order['break'],
        'status' => $order['status'], 
        );
        array_push($order_arr,$order_record);
    }

    return $order_arr;  
}

function getOrderUser($data){
    $url = 'http://localhost/WebApp_sandweches/food-api/API/order/getArchiveOrderUser.php?USER_ID='.$data;
    
    $json_data = file_get_contents($url);

    $decode_data = json_decode($json_data, $assoc=true);
    $order_data = $decode_data;
    $order_arr=array();

    foreach ($order_data as $order) {
      $order_record = array(
        'id' => $order['id'],
        'user' => $order['user'],
        'created' => $order['created'], 
        'pickup' => $order['pickup'], 
        'break' => $order['break'],
        'status' => $order['status'], 
        'json' => $order['json'],
        );
        array_push($order_arr,$order_record);
    }

    return $order_arr;  
}

?>