<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once dirname(__FILE__) . '/../../../COMMON/connect.php';
include_once dirname(__FILE__) . '/../../../MODEL/pickup.php';

$database = new Database();
$db = $database->connect();

if (!strpos($_SERVER["REQUEST_URI"], "?id=")) // Controlla se l'URI contiene ?BREAK_ID
{
    http_response_code(400);
    die(json_encode(array("Message" => "Bad request")));
}

$id = explode("?id=" ,$_SERVER['REQUEST_URI'])[1]; // Viene ricavato quello che c'è dopo ?BREAK_ID

if(empty($id)){
    http_response_code(400);
    echo json_encode(["Message" => "No id found"]);
    die();
}

$pickup = new PickUp($db);

$stmt = $pickup->getPickupId($name);

var_dump($stmt->num_rows['id']); 

if (!empty($stmt))
{
    http_response_code(200);
    echo json_encode($stmt, JSON_PRETTY_PRINT);
}
else
{
    echo "No records";
}
?>