<?php
require_once '../DB/dbconfig.php';
require_once 'orderfunctions.php';

$orderId= getOrderId($conn);
header('Content-Type: application/json');
echo json_encode($orderId);
?>