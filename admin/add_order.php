<?php 
	include_once("../model/OrderModel.php");
    // include_once("../model/OrderDetailModel.php");
    include_once("../model/UserModel.php");
    include_once("../model/ProductModel.php");
    include_once("../model/OrderDetailModel.php");
    include_once("controller/send_mail.php");
    
	class Ctrl_Order{
		public function invoke(){
            $productModel = new ProductModel();
            $orderModel = new OrderModel();
            $orderDetailModel = new OrderDetailModel();

            $list_product = $productModel->getAllProduct();
			if (sizeof($_POST)){
                $order = array();
                $order['name'] = $_POST['name'];
                $order['phone'] = $_POST['phone'];
                $order['email'] = $_POST['email'];
                $order['address'] = $_POST['address'];
                $order['product_id'] = $_POST['product_id'];
                $order['total_money'] = 0;
                $order['status'] = 2;
                $order['delivery_status'] = 3;
                $order['type_buy'] = 2;
                $order['created_at'] = date('Y-m-d H:i:s');
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $code = '';
                for ($i = 0; $i < 10; $i++) {
                    $code .= $characters[rand(0, $charactersLength - 1)];
                }
                
                $order['code']= $code;

                foreach ($order['product_id'] as $id) {
                    $row = $productModel->getProductById($id);
                    if ($row['is_sale'] == 1) {
                        $order['total_money'] += $row['price'] - $row['price'] * $row['percent_sale'] / 100;
                    } else {
                        $order['total_money'] += $row['price'];
                    }
                }

                // create order
                $orderId = $orderModel->createOrder($order);
                foreach ($order['product_id'] as $id){
                    $orderdetail = array();
                    $orderdetail['order_id'] = $orderId;
                    $orderdetail['code'] = $order['code'];
                    $orderdetail['quantity'] = 1;
                    $orderdetail['price'] = 0;
                    $orderdetail['product_id'] = $id;
                    $orderdetail['created_at'] = $order['created_at'];
                    $row = $productModel->getProductById($id);
                    if ($row['is_sale'] == 1) {
                        $orderdetail['price'] = $row['price'] - $row['price'] * $row['percent_sale'] / 100;
                    } else {
                        $orderdetail['price'] = $row['price'];
                    }
                    $orderdetail['sale'] = $row['percent_sale'];
                    $orderDetailModel->createOrderDetail($orderdetail);
                }

                $updateStatus = "Success";
                $subject = "Shop Online của Hạnh thông báo";
                $body = 'Đơn hàng ' . $code . ' của bạn đã được shop tạo. Cảm ơn bạn đã mua hàng của shop';
                if (isset($order['email'])) {
                    sendMail($order['email'], $body, $subject);
                }
                include_once("add_order_temp.php");
			}
			else{
                include_once("add_order_temp.php");
			}
			
		}
	}

	$c_order = new Ctrl_Order();
	$c_order->invoke();
?>