<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once dirname(__FILE__) . '/../../COMMON/connect.php';
include_once dirname(__FILE__) . '/../../MODEL/order.php';
require __DIR__ . '/../../MODEL/product.php';

$data = json_decode(file_get_contents("php://input"));

if(empty($data)){
    echo json_encode(["message" => "Bad Request"]);
}

$db = new Database();
$db_conn = $db->connect();
$product = new ProductController($db_conn);

/*esempio json
{
    "products":
        [
            {"ID": 1, "quantity" : 3, "action" : "set"},
            {"ID": 2, "quantity" : 5, "action" : "add"},
            {"ID": 3, "quantity" : 6, "action" : "remove"}
        ]
}
*/

//  var_dump(json_decode(json_encode($data), true));
//var_dump((array)json_decode($data));

//foreach(json_decode($data->products, true) as $single_mod){
    //var_dump($single_mod);
    $order = array($data->products);
    var_dump(json_decode($order[0]));
    switchjson_decode($order[0])['action']){
        case "set":
            $product->setProductQuantity($order['ID'], $order->quantity);
            break;
        case "add":
            $product->addProductQuantity($order['ID'], $order['quantity']);
            break;
        case "remove":
            $product->removeProductQuantity($order['ID'], $order['quantity']);
            break;
    }
//}
die();
?>