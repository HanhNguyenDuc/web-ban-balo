<?php 
    include_once("Model.php");

    class ProductModel extends Model{
		// public $conn;
		public function __construct(){
			parent::__construct();
			// $this->conn = $this->connect();
        }
        
        public function getProductById($id){
            $sql = "select * from products where id='{$id}';";
            if ($this->conn){
                $result = $this->conn->query($sql);
                $row = mysqli_fetch_array($result);
                if ($row){
                    return $row;
                }
            }
            return null;
        }

        public function getAllProduct(){
            $list_product = [];
            $sql = "select * from products";
            $query = $this->conn->query($sql);
            while ($row = $query->fetch_assoc()) {
                $list_product[] = $row;
            }
            return $list_product;
        }
    }

?>