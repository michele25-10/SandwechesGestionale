<?php

function viewOrder(){

    $url = 'http://localhost/WebApp_sandweches/food-api/API/order/getArchiveOrder.php';
    
    $json_data = file_get_contents($url);

    echo $json_data; 

    $decode_data = json_decode($json_data);

    $order_data = $decode_data; 

    /*foreach ($order_data as $order) {
      $order_record = array(
        'id' => $order['id'],
        'user' => $order['user'],
        'created' => $order['created'], 
        'pickup' => $order['pickup'], 
        'break' => $order['break'],
        'status' => $order['status'], 
    );
        echo $order_record['user']; 
    }
    */
}

function getOrderUser($data){
    $url = 'http://localhost/WebApp_sandweches/food-api/API/order/getArchiveOrderUser.php?USER_ID='.$data;
    
    $json_data = file_get_contents($url);

    echo $json_data; 

    $decode_data = json_decode($json_data);
}

?>