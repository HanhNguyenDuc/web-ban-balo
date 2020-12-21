<?php
 
  class Model {
  		public $conn;

	    public function __construct() {
	    	$this->connect();
	    }

	    public function connect(){
	        $dbhost= "127.0.0.1";
	        $dbUser = "hanhnd" ;
	        $dbPass ="hanhnd";
	        $dbName ="bt2_lt_web";
	        $this->conn = mysqli_connect($dbhost,$dbUser,$dbPass,$dbName);
	        return $this->conn;
	        if($this->conn){

	        }else{
	          die("kết nối thất bại".mysqli_connect_error());
	        }
	        return null;
	    }

    }

?>