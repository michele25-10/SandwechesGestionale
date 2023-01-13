<?php
function viewCart($data){

    $url = 'http://localhost/WebApp_sandweches/food-api/API/order/getCart.php?user=' . $data;
    
    $json_data = file_get_contents($url);

    echo $json_data; 

    $decode_data = json_decode($json_data);
    
    $order_data = $decode_data;
}
?>