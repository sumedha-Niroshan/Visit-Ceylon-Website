<?php
require_once '../DB/dbconfig.php';
require_once 'orderfunctions.php';
header('Content-Type: application/json'); // Set the content type to JSON
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $order_id = filter_input(INPUT_GET, 'order_id', FILTER_SANITIZE_NUMBER_INT);
    if ($order_id) {
        $orderDetails = getAllDetails($conn, $order_id);
        if ($orderDetails) {
            // Return the details (Json format)
            echo json_encode($orderDetails);
        } else {
            // Return an error message if details not found
            echo json_encode(["error" => "Order details not found for ID: $order_id"]);
        }
    } else {
        // Return an error message if order_id is invalid or not provided
        echo json_encode(["error" => "Invalid or missing order ID"]);
    }
} else {
    // Return an error message if the request method is not GET
    echo json_encode(["error" => "Invalid request method"]);
}
?>
