
<?php
  include("db.php");  

	$pinno =$_REQUEST['pinno'];
	

	
$sql = "DELETE FROM user WHERE pinno = '$pinno'";

if (mysqli_query($conn,$sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " .mysqli_connect_error();
}


	
	

?>