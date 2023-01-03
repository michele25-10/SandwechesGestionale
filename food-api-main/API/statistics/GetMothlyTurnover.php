<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once dirname(__FILE__) . '/../../COMMON/connect.php';
    include_once dirname(__FILE__) . '/../../MODEL/statistics.php';

    $database = new Database();
    $db = $database->connect();

    $statistics = new Statistics($db);

    $stmt = $statistics->getMonthlyTurnover();

    if ($stmt->num_rows > 0) {
        $MonthTurnover_arr = array();

        while ($record = $stmt->fetch_assoc()) {
            $MonthTurnover_arr[] = $record;
        }

        $json = json_encode($MonthTurnover_arr);
        echo $json;

        return $json;
    } else {
        echo "\n\nNo record";
    }
?>