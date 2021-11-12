<?php
	require_once 'admin/connect.php';
	$student = $_POST['student'];
	$time = date("H:i", strtotime("+7 HOURS"));
	$date = date("Y-m-d", strtotime("+6 HOURS"));
	$q_student = $conn->query("SELECT * FROM `student` WHERE `student_no` = '$student'") or die(mysqli_error());
	$f_student = $q_student->fetch_array();
	$student_name = $f_student['firstname']." ".$f_student['lastname'];
	$conn->query("INSERT INTO `time` VALUES('', '$student', '$student_name', '$time', '$date')") or die(mysqli_error());
	echo "<h3 style = 'color:black'>".$student_name." at  ".date("h:i", strtotime($time))."</h3>";
?>