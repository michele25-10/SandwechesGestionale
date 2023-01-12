<?php

function deleteTag($data){
    $url = 'http://localhost/WebApp_sandweches/food-api/API/tag/getTag.php?tag_name='.$data;
    
    $json_data = file_get_contents($url);

    echo $json_data; 

    $decode_data = json_decode($json_data);
    
    $tag_data = $decode_data;

    $id = $tag_data[0]->id;

  echo $id; 
}

?>