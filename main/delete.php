<?php 
include "../conn.php";
if (isset($_POST['delete'])) {
	$id=$_POST['delete'];
	$id=end(explode(" ", $id));
	$delete="DELETE FROM todo WHERE ID =$id";
mysqli_query($conn,$delete);
ob_start();
header("location:main3.php");
}
?>