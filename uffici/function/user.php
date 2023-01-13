<?php

function disactiveUser($data){
    
    $id = $data;
    echo $id;

    $url = "http://localhost/webApp_sandweches/food-api/API/user/deleteAccount.php?id=" . $id; 

    $json_data = file_get_contents($url);

    return $json_data; 
}

?>