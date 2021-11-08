<!DOCTYPE html>
<?php
	require_once 'validator.php';
	require_once 'account.php'; 
?>
<html lang = "eng">
	<head>
		<title>Simple Attendance Record System</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<p class = "navbar-text pull-right">Simple Attendance Record System</p>
				</div>
				
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<ul class = "nav nav-pills">
				<li class = "active"><a href = "home.php">Home</a></li>
				<li><a href = "admin.php">Admin</a></li>
				<li><a href = "student.php">Student</a></li>
				<li><a href = "record.php">Record</a></li>
				<li><a href = "logout.php"><i></i>Logout</a></li>
			</ul>
			<br />
			<div class = "alert alert-info">Home</div>
			
		
			<img class = "well col-lg-16" src="images/class-attendance.jpg">
			

		</div>
		<div class = "navbar navbar-fixed-bottom alert-warning">
			<div class = "container-fluid">
			</div>	
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	
</html>