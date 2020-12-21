<?php 
	include_once("../model/OrderModel.php");
    // include_once("../model/OrderDetailModel.php");
    include_once("../model/UserModel.php");
    include_once("controller/send_mail.php");

	class Ctrl_Order{
		public function invoke(){
            $order_detail = null;
            if (isset($_GET['order_id']) && $_GET['order_id'] != null) {
                $orderModel = new OrderModel();
                $conn = $orderModel->conn;
                $order_id = $_GET['order_id'];
                $sql2 = "select * from orders as o where id = $order_id";
                $query2 = $conn->query($sql2);
                $order_detail = mysqli_fetch_array($query2);
	        }
			if (isset($_POST['update_order'])) {
                $delivery_status = $_POST['delivery_status'];
                $order_id = $_POST['order_id'];
                $note = $_POST['note'];
                $created_at = date('Y-m-d H:i:s');
                $error = array();
                //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
                if ($delivery_status == null) {
                    $error['delivery_status'] = 'Bạn chưa chọn trạng thái vậy chuyển';
                }
                if ($note == null) {
                    $error['note'] = 'Bạn chưa nhập ghi chú';
                }
                if (!$error) {
                    //Lưu thông tin thành viên vào bảng
                    $sql = "UPDATE orders SET delivery_status = $delivery_status WHERE id = $order_id";
                    $query = $conn->query($sql);
                    $addorder_history = mysqli_query($conn, "
                        INSERT INTO order_history (
                            order_id,
                            note,
                            status,
                            created_at
                        )
                        VALUE (
                            '{$order_id}',
                            '{$note}',
                            '{$delivery_status}',
                            '{$created_at}'
                        )
                        ");
                    $user_id = $order_detail['user_id'];
                    $name_delivery_status = "";
                    if ($delivery_status == 0) {
                        $name_delivery_status = 'Chờ xác nhận';
                    } elseif ($delivery_status == 1) {
                        $name_delivery_status = 'Đã xác nhận';
                    } elseif ($delivery_status == 2) {
                        $name_delivery_status = 'Đang giao';
                    } elseif ($delivery_status == 3) {
                        $name_delivery_status = 'Đã giao';
                    } else {
                        $name_delivery_status = 'Đã hủy';
                    }
                    
                    $content = "Đơn hàng " . $order_detail['code'] . " của bạn đã được chủ của hàng cập nhật thành ". $name_delivery_status;
                    $is_view = 0;
                    $type = 1;
                    $object_id = $order_id;
                    $sqlupdate = "
                    INSERT INTO notification (
                        user_id,
                        content,
                        is_view,
                        type,
                        object_id,
                        created_at
                    )
                    VALUE (
                        '{$user_id}',
                        '{$content}',
                        '{$is_view}',
                        '{$type}',
                        '{$object_id}',
                        '{$created_at}'
                    )
                    ";
                    var_dump($sqlupdate);
                    $add_notify = mysqli_query($conn, $sqlupdate);
                    }
                }
                $subject = "Shop Online của Hạnh thông báo";
                $body = 'Trạng thái đơn hàng ' . $order_detail['code'] . ' của bạn đã được thay đổi.';
                if (isset($order['email'])) {
                    sendMail($order['email'], $body, $subject);
                }
                include_once("add_order_temp.php");
                include_once("update_order_temp.php");
			
		}
	}

	$c_order = new Ctrl_Order();
	$c_order->invoke();
