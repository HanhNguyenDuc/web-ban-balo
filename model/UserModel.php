<?php 
	include_once("Model.php");

	class UserModel extends Model{
		// public $conn;
		public function __construct(){
			parent::__construct();
			// $this->conn = $this->connect();
		}

		public function getUserById($id){
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

		public function getUserByNameAndPhone($name, $phone){
			$sql = "select * from users where name like '{$name}%' and phone LIKE '{$phone}%'";
			if ($this->conn){
				$result = mysqli_query($this->conn, $sql);
				if($result){
					$result_list = array();
					while ($row=mysqli_fetch_assoc($result)){
						array_push($result_list, $row);
					}
					return $result_list;
				}
				else{
					echo("EveryThingIsNotOK");
				}
			}
			return null;
		}
	}
	
?>