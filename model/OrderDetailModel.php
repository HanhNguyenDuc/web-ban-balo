<?php 
    include_once("Model.php");

	class OrderDetailModel extends Model{
		// public $conn;
		public function __construct(){
			parent::__construct();
			// $this->conn = $this->connect();
		}

		public function getOrderDetailByOrderId($order_id){
			$sql = "select products.*, order_detail.* from order_detail left join products on products.id = order_detail.product_id where order_detail.order_id={$order_id}";
			// var_dump($sql);
			if ($this->conn){
				$result = mysqli_query($this->conn, $sql);
				if($result){
					$result_list = array();
					while ($row=mysqli_fetch_assoc($result)){
						array_push($result_list, $row);
					}
					return $result_list;
				}
				else
				{
					echo "no result";
				}
			}
			else{
				echo "no result";
			}
			return null;
		}
		
		public function createOrderDetail($orderDetail){
			$addorder_detail = mysqli_query($this->conn, "
            INSERT INTO order_detail (
                order_id,
                product_id,
                quantity,
                price,
                sale,
                created_at
            )
            VALUE (
                '{$orderDetail['order_id']}',
                '{$orderDetail['product_id']}',
                '{$orderDetail['quantity']}',
                '{$orderDetail['price']}',
                '{$orderDetail['sale']}',
                '{$orderDetail['created_at']}'
			);
			");
			
			$orderDetail_id = mysqli_insert_id($this->conn);
			return $orderDetail_id;
		}
        
	}
	
?>