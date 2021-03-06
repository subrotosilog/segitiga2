<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kalkulator segitiga</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
		<div class="container-login100" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNVLZ1dwmGdLewS81TvLaGj1wFUwqzUDaA8tCQ4utCTYBUtJn_');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="index" method="post">
					<span class="login100-form-title p-b-49">
						PERHITUNGAN LUAS SEGITIGA
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Alas">
						<span class="label-input100"></span>
						<input class="input100" type="text" name="ALAS" placeholder="INPUT ALAS">
						<span class="focus-input100" data-symbol=""></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="tinggi">
						<span class="label-input100"></span>
						<input class="input100" type="text" name="tinggi" placeholder="INPUT TINGGI">
						<span class="focus-input100" data-symbol=""></span>
					</div>	
					
					<div class="text-right p-t-8 p-b-31">
						
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit">
								HITUNG SEKARANG
							</button>
						</div>
						<?php
							if(isset($_POST['submit'])){
								$alas= $_POST['ALAS'];
								$tinggi= $_POST['tinggi'];
								$luas_segitiga = 1/2 * $alas * $tinggi; // Menghitung luas segitiga
						echo "Hasil Luas segitiga dengan alas : $alas, dan tinggi $tinggi <br>";
						echo "yaitu $luas_segitiga";
							}
							?>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">

					</div>

					<div class="flex-c-m">
						
					</div>

					<div class="flex-col-c p-t-155">
						
					</div>
				</form>
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
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>