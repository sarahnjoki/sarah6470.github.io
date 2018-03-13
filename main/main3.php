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
				
					
					<span class='login100-form-title p-b-53'>
						<u>Manage your schedules</u>
					</span>

			

					<?php 
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
								<th><b>Update</b></th>
								<th><b>Delete</b></th>

							</tr>
						</thead>";

						while($row=mysqli_fetch_assoc($data)){
							echo"


							<tbody>
							<tr>
							<td>$row[JOB]</td>
							<td>$row[DATE]</td>
							<td>$row[TIME]</td>
							<td><form action='upupdate.php' method='POST'><input type='submit' name='update' class='btn btn-outline-info waves-effect btn-sm' value='Update $row[ID]'></form>
							</td>
							<td><form action='delete.php' method='POST'><input type='submit' name='delete' class='btn btn-outline-danger waves-effect btn-sm' value='Delete $row[ID]'></form>
							</td>
							</tr>
							</tbody> 

							";

				 

						}
					
					?>
					</table>

					<div class='w-full text-center p-t-55'>
						<span class='txt2'>
							Done scheduling?
						</span>

						<a href='../logout.php' class='txt2 bo1'>
							Logout
						</a>
					</div>
			</div>
		</div>
	</div>
	

	<div id='dropDownSelect1'></div> 

	<?php include 'foot.php'; ?>