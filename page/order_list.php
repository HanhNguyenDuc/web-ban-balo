<?php 
	
	session_start();
	// var_dump($_SESSION);
	if (!isset($_SESSION['user_id'])){
		header("Location: /LT-Web/login/");
	}
	include_once("../model/OrderModel.php");
	include_once("../model/OrderDetailModel.php");

	class Ctrl_Order{
		public function invoke(){
			if (isset($_GET['userid'])){
				$modelOrder = new OrderModel();
				$orders = $modelOrder->getOrderByUserId($_GET['userid']);
		
				include_once("../view/OrderList.php");
			}
			else{
				$modelOrder = new OrderModel();
				$modelOrderDetail = new OrderDetailModel();
				$orders = $modelOrder->getOrderByUserId(3);
				for ($i=0; $i<sizeof($orders); $i++){
					// $orders[$i]["numberOfProduct"] = 3;
					$ordersDetail = $modelOrderDetail->getOrderDetailByOrderId($orders[$i]["id"]);
					$orders[$i]["details"] = $ordersDetail;
				}
				
				// var_dump($orders);
				// echo $orders == null;
				// echo "fhaiudhfaiuhfiuahqufhaiuhdfiuasdhfiuahquifhaduifh";
				include_once("../view/OrderList.php");
			}
			
		}
	}

	$c_order = new Ctrl_Order();
	$c_order->invoke();
?>