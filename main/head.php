<!DOCTYPE html>
<html lang="en">
<head>
	<title>Schedular</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link href="../css/mdb.min.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar sticky-top navbar-expand-lg navbar-dark secondary-color">
		<a class="navbar-brand" href="view.php"><img src="images/logo.png" height="50px" width="50px">Scheduler</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="view.php">Add Schedule <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage Schedule
					</a>
					<div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="main2.php?go">View My Schedule</a>
						<a class="dropdown-item" href="main3.php">Manage Schedule</a>
					</div>
				</li>
			</ul>
			<form class="form-inline" action="view.php?go" method="POST">
				<div class="md-form mt-0">
					<input class="form-control mr-sm-2" type="text" placeholder="Search My Schedule..." aria-label="Search" name="search">
				</div>
			</form>
		</div>
	</nav>
	