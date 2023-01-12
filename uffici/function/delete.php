<?php

function deleteTag($data){
    $url = 'http://localhost/WebApp_sandweches/food-api/API/tag/getTag.php?tag_name='.$data;
    
    $json_data = file_get_contents($url);

    echo $json_data; 

    $decode_data = json_decode($json_data);
    
    $tag_data = $decode_data;

    foreach ($tag_data as $tag) {
      $tag_record = array(
        'id' => $tag['id'],
        'name' => $tag['name'],
    );
        echo $tag_record['name']; 
  }

}

?>