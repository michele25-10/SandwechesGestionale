<?php

function disactiveUser($data){
    
    $id = $data;
    echo $id;

    $url = "http://localhost/webApp_sandweches/food-api/user/deleteAccount.php?id=" . $id; 

    $json_data = file_get_contents($url);

    echo $json_data; 
}

?>