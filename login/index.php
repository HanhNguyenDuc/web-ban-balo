<?php
	include_once("../model/UserModel.php");
	// if (session_id() === null){
    session_start();
	// }
	$userModel = new UserModel();
	if (isset($_POST['DangNhap'])){
        // var_dump($_POST);
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "SELECT * from users where email='$email' and password='$password';";
		$result = mysqli_query($userModel->conn, $sql);
		if ($result){
			$result_list = array();
			while($row=mysqli_fetch_assoc($result)){
				array_push($result_list, $row);
			}
			$user = $result_list[0];
			// var_dump($result_list);
			$_SESSION['user_id'] = $user['id'];
			header('Location: /LT-Web/controller/OrderListController.php');
		}
		else{
			// header('Location: /LT-Web/login/index.php');
		}
		// var_dump($email);
		// var_dump($password);
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hạnh Shop</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title p-b-34">
						Đăng nhập
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="email" placeholder="Tên Đăng nhập">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="password" placeholder="Mật khẩu">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<!-- <button class="login100-form-btn" type="submit">
							Sign in
                        </button> -->
                        <input class="login100-form-btn" type="submit" value="Đăng nhập" name="DangNhap">
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Quên
						</span>

						<a href="#" class="txt2">
							mật khẩu
						</a>
					</div>

					<div class="w-full text-center">
						<a href="#" class="txt3">
							Đăng ký
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>