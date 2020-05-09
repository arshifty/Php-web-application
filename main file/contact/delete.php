
<?php
  include("db.php");  

	$pinno =$_REQUEST['pinno'];
	

	
$sql = "DELETE FROM contactinfo WHERE id = '$pinno'";

if (mysqli_query($connection,$sql)) {
    
     echo '<script>window.location.href = "view.php";</script>';
 // echo " <p align='center'> Data deleted<br>";
//	echo "<a href='view.php'> View data </a>   </p>";
} else {
    echo "Error deleting record: " .mysqli_connect_error();
}


	
	

?>