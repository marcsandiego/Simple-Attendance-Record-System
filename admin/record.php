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
		<link rel = "stylesheet" href = "css/jquery.dataTables.css" />
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
				<li><a href = "home.php">Home</a></li>
				<li><a href = "admin.php">Admin</a></li>
				<li><a href = "student.php">Student</a></li>
				<li class = "active"><a href = "record.php">Record</a></li>
				<li><a href = "logout.php"><i></i>Logout</a></li>
			</ul>
			<br />
			<div class = "alert alert-info">Record</div>
			<div class = "modal fade" id = "delete" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content ">
						<div class = "modal-body">
							<center><label class = "text-danger">Are you sure you want to delete this record?</label></center>
							<br />
							<center><a class = "btn btn-danger remove_id" ><span class = "glyphicon glyphicon-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-remove"></span> No</button></center>
						</div>
					</div>
				</div>
			</div>
			<div class = "well col-lg-12">
				<table id = "table" class = "table table-bordered">
					<thead style="background-color:white">
						<tr>
							<th>Student ID</th>
							<th>Student Name</th>
							<th>Time</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$q_time = $conn->query("SELECT * FROM `time`") or die(mysqli_error());
						while($f_time = $q_time->fetch_array()){
							
					?>	
						<tr>
							<td><?php echo $f_time['student_no']?></td>
							<td><?php echo htmlentities($f_time['student_name'])?></td>
							<td><?php echo date("h:i", strtotime($f_time['time']))?></td>
							<td><?php echo date("Y-m-d", strtotime($f_time['date']))?></td>
							<td><button name = "<?php echo $f_time['time_id']?>" class = "btn btn-danger rtime_id" href = "#" data-toggle = "modal" data-target = "#delete">X</button></td>
						</tr>
					<?php
						}
					?>	
					</tbody>
				</table>
			<br />
			<br />	
			<br />	
			</div>
		</div>
		<div class = "navbar navbar-fixed-bottom alert-warning">
			<div class = "container-fluid">
			</div>	
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/jquery.dataTables.js"></script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('.rtime_id').click(function(){
				$time_id = $(this).attr('name');
				$('.remove_id').click(function(){
					window.location = 'delete_time.php?time_id=' + $time_id;
				});
			});
		});
	</script>
</html>