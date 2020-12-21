<?php 
	include_once("../model/OrderModel.php");
	include_once("../model/OrderDetailModel.php");

	class Ctrl_Order{
		public function invoke(){
			if (isset($_GET['orderId'])){
				$modelOrder = new OrderModel();
				$modelOrderDetail = new OrderDetailModel();
				// var_dump($_GET['orderId']);
				$order = $modelOrder->getOrderByCode($_GET['orderId'])[0];
				// var_dump($order["id"]);
				$orderDetail = $modelOrderDetail->getOrderDetailByOrderId($order["id"]);
				$order["details"] = $orderDetail;

				// echo "Queried Order".var_dump($order);
				include_once("../view/OrderDetail.php");
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
				include_once("../view/OrderDetail.php");
			}
			
		}
	}

	$c_order = new Ctrl_Order();
	$c_order->invoke();
?>