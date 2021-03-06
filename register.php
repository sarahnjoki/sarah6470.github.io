<?php 
session_start();
include 'head.php';

?>	
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="input.php" method="POST">
					<span class="login100-form-logo" style="background-color: black">
						<i class="fa fa-users" style="color: white"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Register
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Choose username">
						<input class="input100" type="text" name="username" placeholder="Username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Choose password">
						<input class="input100" type="password" name="password" placeholder="Password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter phone number">
						<input class="input100" type="number" name="number" placeholder="Phone number">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					

					<div class="container-login100-form-btn">
						<input type="submit" name="submit" class="login100-form-btn" value="Register">
					</div>
				</form>
				<br><div class="w-full text-center p-t-55">
						<span class="txt2">
							Already a member?
						</span>

						<a href="login.php" class="txt2 bo1">
							Login up now
						</a>
					</div>
			</div>
		</div>
	</div>
	
<?php include 'foot.php' ?>