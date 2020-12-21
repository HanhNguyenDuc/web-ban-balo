<?php 
    session_start();
	if (!isset($_SESSION['user_id'])){
		header("Location: /LT-Web/login/");
	}
	
	include_once("../model/OrderModel.php");
    include_once("../model/OrderDetailModel.php");
    include_once("../model/ProductModel.php");
    require_once "../lib/PHPExcel.php";
    
    class Ctrl_Export_Excel{
        public function invoke(){
            // var_dump($_POST);
            if (isset($_POST['order_id'])){
                $order_id = $_POST['order_id'];

				$modelOrder = new OrderModel();
                $modelOrderDetail = new OrderDetailModel();
                $modelProduct = new ProductModel();
                
				// var_dump($_GET['orderId']);
                $order = $modelOrder->getOrderByCode($order_id)[0];
                // var_dump($order);
				// var_dump($order["id"]);
                $orderDetail = $modelOrderDetail->getOrderDetailByOrderId($order['id']);
                $order["details"] = $orderDetail;
                
                $excel = new PHPExcel();
                $excel->setActiveSheetIndex(0);
                $excel->getActiveSheet()->setTitle('Hóa đơn '.$order['code']);

                $excel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
                $excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
                $excel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
                
                $excel->getActiveSheet()->setCellValue('A1', "Chi tiết hóa đơn");
                $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
                $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
                
                $excel->getActiveSheet()->setCellValue('A2', "Thời gian tạo: Ngày ".$order['created_at']);
                $excel->getActiveSheet()->getStyle('A2')->getFont()->setItalic(true);


                $excel->getActiveSheet()->getStyle('A4:D4')->getFont()->setBold(true);

                $excel->getActiveSheet()->setCellValue('A4', 'STT');
                $excel->getActiveSheet()->setCellValue('B4', 'Mặt hàng');
                $excel->getActiveSheet()->setCellValue('C4', 'Số lượng');
                $excel->getActiveSheet()->setCellValue('D4', 'Thành tiền');

                $startRow = 5;
                $totalMoney = 0;
                foreach ($orderDetail as $detail){
                    $productId = $detail['product_id'];
                    $product = $modelProduct->getProductById($productId);
                    $excel->getActiveSheet()->setCellValue('A' . $startRow, $startRow-1);
                    $excel->getActiveSheet()->setCellValue('B' . $startRow, $product['name']);
                    $excel->getActiveSheet()->setCellValue('C' . $startRow, $detail['quantity']);
                    $value = (int)$product['price'] * (int)$detail['quantity'];
                    $totalMoney += $value;
                    $excel->getActiveSheet()->setCellValue('D' . $startRow, $value);
                    $startRow++;
                }
                $excel->getActiveSheet()->setCellValue('C' . $startRow, "Tổng tiền");
                $excel->getActiveSheet()->setCellValue('D' . $startRow, $totalMoney);
                header('Content-type: application/vnd.ms-excel');
                header('Content-Disposition: attachment; filename="bill_'.$order['code'].'.xls"');
                PHPExcel_IOFactory::createWriter($excel, 'Excel2007')->save('php://output');
            }
        }
    }

    $c_order = new Ctrl_Export_Excel();
	$c_order->invoke();
?>