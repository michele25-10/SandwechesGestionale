<?php

function deleteTag($data){
    $url = 'http://localhost/WebApp_sandweches/food-api/API/tag/getTag.php?tag_name='.$data;
    
    $json_data = file_get_contents($url);

    $decode_data = json_decode($json_data);
    
    $tag_data = $decode_data;

    $id = $tag_data[0]->id;

    echo $id;

    $deleteUrl = 'http://localhost/WebApp_sandweches/food-api/API/tag/deleteTag.php';
    
    $ch = curl_init();
 

    $headers = array(
        "Content-Type: application/json",
    );

    curl_setopt($ch, CURLOPT_URL, $deleteUrl);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 

    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array("tag_id" => "$id")));
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $result = curl_exec($ch);

    echo $result; 

    $result = json_decode($result);
    
    curl_close($ch); 

    return $result; 
}

?>