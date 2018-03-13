

<?php 
include 'head.php';

?>	
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				
				<?php 
				require_once("conn.php");
				ob_start();
				if (isset($_POST['submit'])) {
					$password=md5($_POST['password']);
					$password2=$_POST['password'];
					$username=$_POST['username'];
					$number=$_POST['number'];
					$sql1="SELECT ID FROM 6470users WHERE USERNAME='$username' and PHONE = '$number'";
					$sql2="INSERT INTO 6470users (USERNAME,PASSWORD_HASH,PHONE) VALUES ('$username' , '$password' , '$number') ";
					$select=mysqli_query($conn,$sql1);
					$row = mysqli_fetch_array($select,MYSQLI_ASSOC);
					$count = mysqli_num_rows($select);
					if ($count ==0) {
						unset($_POST);
						session_start();
						$_SESSION['username']=$username;
						mysqli_query($conn,$sql2);
						setcookie ("username",$username,time()+ (10 * 365 * 24 * 60 * 60));
						setcookie ("password",$password2,time()+ (10 * 365 * 24 * 60 * 60));
						echo "<div class='container-login100'><center><h1 style='color: green'><strong>Successfully registered!!<br>Login now <br><a href='view.php' class='btn btn-primary'>Login</a></strong></h1></center></div>";
					}else {
						echo "<div><center><h1 style='color: red'><strong>Registration failed, username already taken.</strong></h1><br><br><a href='register.php' class='btn btn-warning'>Register Again</a></center></div>";
					}

				}
				?>

			</div>
		</div>
	</div>
	
<?php include 'foot.php' ?>