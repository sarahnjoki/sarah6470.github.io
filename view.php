<?php 
session_start();
if (!isset($_SESSION['username'])) {
	ob_start();
	header("location:login.php");
}
?>
<?php header("location:main/view.php") ?>