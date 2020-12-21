<?php

include_once("../model/OrderModel.php");
include_once("controller/send_mail.php");
// session_start();

$orderModel = new OrderModel();
$conn = $orderModel->conn;
if (isset($_GET['order_id']) && $_GET['order_id'] != null) {
    include '../connection.php';
    $orderModel = new OrderModel();
    $order_id = $_GET['order_id'];
    
    $order = $orderModel->getOrderById($order_id)[0];
    var_dump($order);
    $sql = "DELETE FROM order_history WHERE order_id = $order_id";
    $query = $conn->query($sql);
    $sql1 = "DELETE FROM order_detail WHERE order_id = $order_id";
    $query = $conn->query($sql1);
    $sql2 = "DELETE FROM orders WHERE id = $order_id";
    $query = $conn->query($sql2);
    $subject = "Shop Online của Hạnh thông báo";
    $body = 'Đơn hàng ' . $order['code'] . ' của bạn đã được hủy. Cảm ơn bạn vì đã quan tâm đến shop';
    if (isset($order['email'])) {
        sendMail($order['email'], $body, $subject);
    }
    header('Location: /LT-Web/admin/index.php');
}
