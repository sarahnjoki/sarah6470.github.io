<?php
session_start(); ?>

<?php 

if (isset($_POST['submit'])) {
	require_once('../conn.php');
	$job=$_POST['job'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$user=$_SESSION['username'];
	$sql="INSERT INTO todo (USERNAME,JOB,DATE,TIME) VALUES ('$user','$job','$date','$time')";
	$sql2="SELECT JOB FROM todo WHERE JOB='$job'";
	$result = mysqli_query($conn,$sql2);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);
	if ($count == 0) {
		mysqli_query($conn,$sql);
		ob_start();
		header("location:view.php?done");
	}else{
		header("location:view.php?fail");
	}
}

 ?>