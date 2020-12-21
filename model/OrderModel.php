<?php 
	// include_once("OrderModel.php");
	include_once("Model.php");

	class OrderModel extends Model{
		// public $conn;
		public function __construct(){
			parent::__construct();
			// $this->conn = $this->connect();
		}

		public function getUserByUserId($id){
			$sql = "select * from users where id='{$id}';";

			echo $this->conn == null;
			if ($this->conn){
				// mysqli_query($this->conn);
				$result = mysqli_query($this->conn, $sql);
				if($result){
					$result_list = array();
					while($row=mysqli_fetch_assoc($result)){
						array_push($result_list, $row);
					}
					return $result_list;
				}
				else{
					echo("Everything is not ok");
				}
			}
			return null;
		}

		public function getOrderByCode($code){
			$sql = "select * from orders where code='{$code}'";

			if ($this->conn){
				$result = mysqli_query($this->conn, $sql);
				if ($result){
					$result_list = array();
					while ($row=mysqli_fetch_assoc($result)){
						array_push($result_list, $row);
					}
					return $result_list;
				}
				return null;
			}
			return null;
		}

		public function getOrderById($order_id){
			$sql = "select * from orders where id='{$order_id}'";

			if ($this->conn){
				$result = mysqli_query($this->conn, $sql);
				if ($result){
					$result_list = array();
					while ($row=mysqli_fetch_assoc($result)){
						array_push($result_list, $row);
					}
					return $result_list;
				}
				return null;
			}
			return null;
		}

		public function getOrderByUserId($id){
			if ($id == null){
				$id = 3;
			}
			$sql = "select * from orders where user_id={$id};";
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

		public function getOrderByUserNameAndPhone($name, $phone){
			$sql = "select * from orders where name like '{$name}%' and phone like '{$phone}%';";
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

		public function createOrder($order){
			$sql = "INSERT INTO orders (
				code,
				total_money,
				status,
				name,
				email,
				phone,
				address,
				delivery_status,
				type_buy,
				created_at
			)
			VALUE (
				'{$order["code"]}',
				'{$order["total_money"]}',
				'{$order["status"]}',
				'{$order["name"]}',
				'{$order["email"]}',
				'{$order["phone"]}',
				'{$order["address"]}',
				'{$order["delivery_status"]}',
				'{$order["type_buy"]}',
				'{$order["created_at"]}'
			)
			";
			$addorder = mysqli_query($this->conn, $sql);
			// var_dump($addorder);
			$order_id = mysqli_insert_id($this->conn);
			return $order_id;
		}

	}
	
?>