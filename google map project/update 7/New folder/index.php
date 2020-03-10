 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mapdatabase";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
} 

?>


<html>

<head>

<style> 
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
		background:#c6ffc6;
      }
</style>

</head>

<body>


 <table border="1" cellpadding="10">
	
			<?php
			
			$id =$_REQUEST['id'];

                 $sql = "SELECT * FROM markers WHERE id  = '$id'";
                 $result = mysqli_query($conn, $sql);
			
				
			
			
			
			echo "<tr align='center'>";	
			//	echo"<td><font color='black'>id</font></td>";
				echo"<th><font color='black'>Name</font></th>";
				echo"<th><font color='black'>Address</font></th>";
				echo"<th><font color='black'>Phone number</font></th>";
				echo"<th><font color='black'>E-mail</font></th>";
                echo"<th><font color='black'>Upozilla</font></th>";				
			//	echo"<td><font color='black'>password</font></td>";	
				echo"<th><font color='black'>Blood Group</font></th>";	
				
		  echo "</tr>";
			
			while($test =  mysqli_fetch_assoc($result))
			{
				$id = $test['id'];	
				echo "<tr align='center'>";	
			//	echo"<td><font color='black'>" .$test['id']."</font></td>";
				echo"<td><font color='black'>" .$test['name']."</font></td>";
				echo"<td><font color='black'>". $test['address']. "</font></td>";
				echo"<td><font color='black'>". $test['phone_number']. "</font></td>";
				echo"<td><font color='black'>". $test['email']. "</font></td>";	
				echo"<td><font color='black'>". $test['uozilla']. "</font></td>";	
			//	echo"<td><font color='black'>". $test['password']. "</font></td>";	
				echo"<td><font color='black'>". $test['blood_group']. "</font></td>";				
			
			
									
				echo "</tr>";
			}
			mysqli_close($conn);
			?>
</table>
  
<?php



  echo "<br><br><br>If you want to go main page please click on <a href ='my loc to destination side by side.php'>main page</a>";
    echo "<br><br><br>For registration , click on <a href ='donar.html'>Registration</a>";

  
?>

</html>
</body>

  