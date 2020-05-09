<?php
	include 'db.php';
	$quarantine=$_POST['quarantine'];
	$doctor=$_POST['doctor'];
	$number=$_POST['number'];
	$worktime=$_POST['worktime'];
	$sql = "INSERT INTO `contactinfo`( `quarantine`, `doctor`, `number`, `worktime`) 
	VALUES ('$quarantine','$doctor','$number','$worktime')";
	if (mysqli_query($connection, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($connection);
?>