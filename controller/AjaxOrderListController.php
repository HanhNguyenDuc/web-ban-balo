<?php 
	include_once("../model/OrderModel.php");
	include_once("../model/OrderDetailModel.php");

	class Ctrl_Order{
		public function invoke(){
			if (isset($_GET['userid'])){
				$modelOrder = new OrderModel();
				$orders = $modelOrder->getOderByUserId($_GET['userid']);

				include_once("../view/OrderList.php");
			}
			else{
				$modelOrder = new OrderModel();
				$modelOrderDetail = new OrderDetailModel();
				$orders = $modelOrder->getOderByUserId(3);
				for ($i=0; $i<sizeof($orders); $i++){
					// $orders[$i]["numberOfProduct"] = 3;
					$ordersDetail = $modelOrderDetail->getOrderDetailByOrderId($orders[$i]["id"]);
					$orders[$i]["details"] = $ordersDetail;
				}
				
				// var_dump($orders);
				// echo $orders == null;
				// echo "fhaiudhfaiuhfiuahqufhaiuhdfiuasdhfiuahquifhaduifh";
                // include_once("../view/OrderList.php");
                $ajax_response = json_encode($orders, JSON_UNESCAPED_UNICODE);
                echo $ajax_response;
                
			}
			
		}
	}

	$c_order = new Ctrl_Order();
	$c_order->invoke();
?>