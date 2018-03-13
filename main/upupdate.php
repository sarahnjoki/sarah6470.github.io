<?php include 'head.php'; ?>
<?php 
session_start();
if (!isset($_SESSION['username'])) {
	ob_start();
	header("location:login.php");
}
?>
<?php 
include "../conn.php";
if (isset($_POST['update'])) {
	$ids=$_POST['update'];
	$xp=explode(" ","$ids");
	$ids=end($xp);
	$updates="SELECT * FROM todo WHERE ID=$ids";
	$data=mysqli_query($conn,$updates);
	$row = mysqli_fetch_assoc($data);
}
?>
	<div class='limiter'>
		<div class='container-login100' style='background-image: url(images/bg-01.jpg);'>
			<div class='wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33'>
				<form class='login100-form validate-form flex-sb flex-w' method='POST' action='upps.php'>
					
					<span class='login100-form-title p-b-53'>
						<u>Update your schedule</u>
					</span>

					
					<div class='p-t-31 p-b-9'>
						<span class='txt1'>
							Job
						</span>
					</div>
					<div class='wrap-input100 validate-input' data-validate = 'Enter a job'>
						<input value="<?php echo $row['JOB'] ?>" class='input100' type='text' name='job' >
						<span class='focus-input100'></span>
					</div>
					
					<div class='p-t-13 p-b-9'>
						<span class='txt1'>
							Date
						</span>
					</div>
					<div class='wrap-input100 validate-input' data-validate = 'Choose a date'>
						<input value="<?php echo $row['DATE'] ?>" class='input100' type='date' name='date' >
						<span class='focus-input100'></span>
					</div>
					<div class='p-t-13 p-b-9'>
						<span class='txt1'>
							Time
						</span>
					</div>
					<div class='wrap-input100 validate-input' data-validate = 'Choose a time'>
						<input value="<?php echo $row['TIME'] ?>" class='input100' type='time' name='time' >
						<span class='focus-input100'></span>
					</div>

					<div class='container-login100-form-btn m-t-17'>
						<input class='login100-form-btn' type='submit' name='submit' value="Update <?php echo $row['ID'] ?>"></input>
						
					</div>

					<div class='w-full text-center p-t-55'>
						<span class='txt2'>
							Done scheduling?
						</span>

						<a href='../logout.php' class='txt2 bo1'>
							Logout
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id='dropDownSelect1'></div>
	<?php include 'foot.php'; ?>