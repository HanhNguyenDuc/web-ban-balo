<?php 
	include_once("../model/OrderModel.php");
    // include_once("../model/OrderDetailModel.php");
    include_once("../model/UserModel.php");

	class Ctrl_Order{
		public function invoke(){
            $orders = null;
			if (sizeof($_POST)){
                $orderModel = new OrderModel();
                // var_dump($_POST);
                $customer_name = $_POST["name"];
                $customer_phone = $_POST["phone"];
                // $userList = $userModel->getUserByNameAndPhone($customer_name, $customer_phone);
                // // var_dump($userList);
                // $orders = array();
                // foreach($userList as $user){
                    // var_dump($user["id"]);
                $orderList = $orderModel->getOrderByUserNameAndPhone($customer_name, $customer_phone);
                $orders = $orderList;
                // }
                include_once("index_temp.php");
			}
			else{
                include_once("index_temp.php");
			}
			
		}
	}

	$c_order = new Ctrl_Order();
	$c_order->invoke();
?>