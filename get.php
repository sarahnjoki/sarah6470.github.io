


<?php 
include 'head.php';

?>  
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100">
            	<?php
            	session_start();
            	ob_start();
            	require_once("conn.php");
            	if (isset($_POST['submit'])) {
            		$user=$_POST['username'];
            		$passs=$_POST['password'];
            		$pass=sha1($_POST['password']);

            		if ($_SERVER["REQUEST_METHOD"] == "POST") {
            			$sql="SELECT USERNAME, PASSWORD_HASH FROM 6470users WHERE USERNAME = '$user' AND PASSWORD_HASH = '$pass'";
            			$result = mysqli_query($conn,$sql);
            			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);      
            			$count = mysqli_num_rows($result);


            			if ($count==1) {
            				$_SESSION['username']=$user;

            				if(!empty($_POST["remember"])) {
            					setcookie ("username",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
            					setcookie ("password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
            				} else {
            					if(isset($_COOKIE["username"])) {
            						setcookie ("username","");
            					}
            					if(isset($_COOKIE["password"])) {
            						setcookie ("password","");
            					}
            				}



            				header("location:view.php");
            			} else {
            				echo "<div class='login100'><center><h1 style='color: red'><strong>Username or password is Incorrect!!<br>Try Again!! <br><br><a href='login.php' class='btn btn-danger'>Login Again</a></strong></h1></center></div>";
            			}
            		}
            	}

            	?>

            </div>
        </div>
    </div>
    
<?php include 'foot.php' ?>
