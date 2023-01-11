<?php 
include_once dirname(__FILE__) . '/../../../COMMON/connect.php';
include_once dirname(__FILE__) . '/../../../MODEL/pickup.php';

header("Content-type: application/json; charset=UTF-8");

$data = json_decode(file_get_contents("php://input"));

if (empty($data->name)) {
    http_response_code(400);
    echo json_encode(["message" => "Nome non ricevuto"]);
    die();
}

$database = new Database();
$db = $database->connect();

$pickup = new PickUp($db);

$stmt = $pickup->addNewPickup($data);
if($stmt==true){
    echo("Corretto");
}else{
    echo ("Sbagliato");
}
?>