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

function getPickupId($data){
  $url = 'http://localhost/WebApp_sandweches/food-api/API/order/pickup/getPickupId.php?name='.$data;
  
  $json_data = file_get_contents($url);

  if($json_data != false){
    $decode_data = json_decode($json_data, $assoc=true);
    $res = $decode_data;

  if (!empty($res)) {
      var_dump($res); 
    return $res;
  }else{
    return -1; 
  }
  }else{
    return -1; 
  }
}
?>