<?php 
session_start();
if (!isset($_SESSION['user'])) {
	ob_start();
	header("location:forgot.php");

}
 ?>
 <?php 	session_destroy(); ?>

<?php
include 'head.php';
?>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="update2.php" method="POST">
					<span class="login100-form-logo" style="background-color: black">
						<i class="fa fa-users" style="color: white"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Choose new password
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Choose username">
						<input class="input100" type="text" name="username" placeholder="Username" ">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter New Password">
						<input class="input100" type="password" name="pass2" placeholder="New Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					

					<div class="container-login100-form-btn">
						<input type="submit" name="submit" class="login100-form-btn" value="Done">
					</div>
				</form>
			</div>
		</div>
	</div>
	
<?php include 'foot.php' ?>