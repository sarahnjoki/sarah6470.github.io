<?php 
session_start();
include 'head.php';

?>	
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="fupdate.php" method="POST">
					<span class="login100-form-logo" style="background-color: black">
						<i class="fa fa-users" style="color: white"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Reset You Password
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Choose username">
						<input class="input100" type="text" name="username" placeholder="Username" ">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter phone number">
						<input class="input100" type="number" name="phone" placeholder="Phone number">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					

					<div class="container-login100-form-btn">
						<input type="submit" name="submit" class="login100-form-btn" value="Reset Password">
					</div>
				</form>
				<br><div class="w-full text-center p-t-55">
						<a href="login.php" class="txt2 bo1">
							Login up now
						</a>
						|
						<a href="register.php" class="txt2 bo1">
							Register now
						</a>
					</div>
			</div>
		</div>
	</div>
	
<?php include 'foot.php' ?>