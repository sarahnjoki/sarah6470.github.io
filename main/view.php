<?php 
session_start();
if (!isset($_SESSION['username'])) {
	ob_start();
	header("location:login.php");
}
?>
<?php include 'head.php'; ?>
<?php 
if (isset($_GET['done'])) {
	echo "<span class='login100-form-title p-b-53'>
						<u>Successfully added a job!! Add another one</u>
					</span>";
}elseif (isset($_GET['fail'])) {
		echo "<span class='login100-form-title p-b-53'>
						<u>Failed to add a job, please try again.</u>
					</span>";
}
 ?>
<?php 
if (!isset($_POST['search'])) {
	echo "
	<div class='limiter'>
		<div class='container-login100' style='background-image: url(images/bg-01.jpg);'>
			<div class='wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33'>
				<form class='login100-form validate-form flex-sb flex-w' method='post' action='main1.php'>
					
					<span class='login100-form-title p-b-53'>
						<u>Schedule a job now</u>
					</span>

					
					<div class='p-t-31 p-b-9'>
						<span class='txt1'>
							Job
						</span>
					</div>
					<div class='wrap-input100 validate-input' data-validate = 'Enter a job'>
						<input class='input100' type='text' name='job' >
						<span class='focus-input100'></span>
					</div>
					
					<div class='p-t-13 p-b-9'>
						<span class='txt1'>
							Date
						</span>
					</div>
					<div class='wrap-input100 validate-input' data-validate = 'Choose a date'>
						<input class='input100' type='date' name='date' >
						<span class='focus-input100'></span>
					</div>
					<div class='p-t-13 p-b-9'>
						<span class='txt1'>
							Time
						</span>
					</div>
					<div class='wrap-input100 validate-input' data-validate = 'Choose a time'>
						<input class='input100' type='time' name='time' >
						<span class='focus-input100'></span>
					</div>

					<div class='container-login100-form-btn m-t-17'>
						<input class='login100-form-btn' type='submit' name='submit' value='Schedule Now!!'></input>
						
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
";
}else{
	echo "<div class='limiter'>
		<div class='container-login100' style='background-image: url(images/bg-01.jpg);'>
			<div class='wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33'>
			<center><h3>Search Results</h3></center>
					<table class='table table-striped'>
			<thead class='mdb-color darken-3'>
							<tr class='text-white'>
							<th>Job</th>
							<th>Date</th>
							<th>Time</th>
							<th>Manage</th>
							</tr>
							</thead>";
	require_once('../conn.php');
			if(isset($_POST['search'])){
				if(isset($_GET['go'])){
					if(preg_match("/^[  a-zA-Z]+/", $_POST['search'])){
						unset($_GET);
						$name=$_POST['search'];
  //-query  the database table
						$sql="SELECT   USERNAME, JOB, DATE,TIME FROM TODO WHERE JOB LIKE '%" . $name .  "%' OR DATE LIKE '%" . $name .  "%' OR TIME LIKE '%" . $name ."%'" ;
  //-run  the query against the mysql query function
						$result=mysqli_query($conn,$sql);
						$row2=mysqli_fetch_array($result);

  //-create  while loop and loop through result set
						echo "	

				while($row2){
					echo'
						

							<tbody>
							<tr>
							<td>$row[JOB]</td>
							<td>$row[DATE]</td>
							<td>$row[TIME]</td>
							<td><form action='main2.php' method='POST' value='$row[USERNAME]' class='btn-btn success'>Manage</form></td>
							</tr>
							</tbody>
					';	
				}
				</table>
			</div>
		</div>
	</div>
	

	<div id='dropDownSelect1'></div>";
					
	}
}
}
}

?>
	
<?php include 'foot.php' ?>
