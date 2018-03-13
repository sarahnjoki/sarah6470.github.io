<?php 
session_start();
if (!isset($_SESSION['username'])) {
	ob_start();
	header("location:login.php");
}
?>
<?php include 'head.php';
?>
	<div class='limiter'>
		<div class='container-login100' style='background-image: url(images/bg-01.jpg);'>
			<div class='wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33'>
				<form class='login100-form validate-form flex-sb flex-w' method='post' action='main2.php'>
					
					<span class='login100-form-title p-b-53'>
						<u>View your schedules</u>
					</span>

			

					<?php 
					if (isset($_POST['view'])) {
						require_once('../conn.php');
						ob_start();
						$user=$_SESSION['username'];
						$sql="SELECT * FROM todo WHERE USERNAME ='$user'";
						$data = mysqli_query($conn,$sql);
						echo "
						<table class='table table-striped'>
						<thead class='mdb-color darken-3'>
							<tr class='text-white'>
								<th><b>JOB</b></th>
								<th><b>DATE</b></th>
								<th><b>TIME</b></th>
								<th><b>Manage</b></th>
							</tr>
						</thead>";

						while($row=mysqli_fetch_assoc($data)){
							echo"


							<tbody>
							<tr>
							<td>$row[JOB]</td>
							<td>$row[DATE]</td>
							<td>$row[TIME]</td>
							<td><a href='main3.php' class='login100-form-btn'><b style='color:white'>Manage</b></a></td>
							</tr>
							</tbody> 

							";

				 

						}
					}
					?>
					</table>

					<div class='container-login100-form-btn m-t-17'>
						<input class='login100-form-btn' type='submit' name='view' value='View my Schedule!!'></input>
						
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