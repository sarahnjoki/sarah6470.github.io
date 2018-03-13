<?php 
session_start();
ob_start();
include "../conn.php";
if (isset($_POST['submit'])) {
	$job=$_POST['job'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$ids=$_POST['submit'];
	$xp=explode(" ",$ids);
	$ids=end($xp);
	$sql="UPDATE todo SET JOB='$job', DATE='$date', TIME='$time' WHERE ID=$ids";
	mysqli_query($conn,$sql);
	header("location:main3.php");
	echo "<center><h1>Sucessfully updated</h1><br><a href='main3.php'>Continue</a></center>";
}else{
	echo "Update failed";
}

 ?>
