<?php

function disactiveUser($data){
    
    $id = $data;

    $url = "http://localhost/webApp_sandweches/food-api/API/user/deleteAccount.php?id=" . $id; 

    $json_data = file_get_contents($url);
    if($json_data != false){
        $response = json_decode($json_data); 

        return $response->message;    
    }else{
        return "Errore, Utente insesistente"; 
    }
}

function changePassword($data){

    $url = "http://localhost/webApp_sandweches/food-api/API/user/changePassword.php"; 

    $curl = curl_init($url); //inizializza una nuova sessione di cUrl
    //Curl contiene il return del curl_init 

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // ritorna il risultato come stringa

    $headers = array(
        "Content-Type: application/json",
        "Content-Lenght: 0",
    );

    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); // setta gli headers della request

    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

    $responseJson = curl_exec($curl);

    curl_close($curl);

    $response = json_decode($responseJson);

    return $response->message;

}
function viewUser()
{

    $url = 'http://localhost/WebApp_sandweches/food-api/API/user/getArchiveUser.php';

    $json_data = file_get_contents($url);
    if($json_data != false){
        $decode_data = json_decode($json_data, $assoc = true);
        $user_data = $decode_data;
        if (!empty($user_data)) {
            $user_arr = array();

            foreach ($user_data as $user) {
                $user_record = array(
                    'id' => $user['id'],
                     'name' => $user['name'],
                     'surname' => $user['surname'],
                     'email' => $user['email'],
                );
                array_push($user_arr, $user_record);
            }

            return $user_arr;
        }else{
            return -1; 
        }
    } else {
        return -1;
    }

}
?>