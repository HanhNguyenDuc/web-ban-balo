<?php

include_once("../model/OrderModel.php");
// session_start();

$orderModel = new OrderModel();
$conn = $orderModel->conn;
if (isset($_GET['order_id']) && $_GET['order_id'] != null) {
    include '../../connection.php';
    $order_id = $_GET['order_id'];
    $sql = "DELETE FROM order_history WHERE order_id = $order_id";
    $query = $conn->query($sql);
    $sql1 = "DELETE FROM order_detail WHERE order_id = $order_id";
    $query = $conn->query($sql1);
    $sql2 = "DELETE FROM orders WHERE id = $order_id";
    $query = $conn->query($sql2);
    header('Location: /LT-Web/admin/index.php');
}
