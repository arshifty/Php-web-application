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
<body>

<form action="" method="POST">
   <input type="text" name="id" id="names">
   <input type="submit" value="submit" name="submit_btn">
</form>

<?php
    if(isset($_REQUEST['submit_btn']))
    {
		 $id = $_POST["id"];
		
		
		    
                 $sql ="SELECT * FROM `markers` WHERE id='$id'"; 
                 $result = mysqli_query($conn, $sql);
			
			
			   
		    	echo "<tr align='center'>";	
				//echo"<td><font color='black'>id</font></td>";
				echo"<th><font color='black'>Name</font></th>";
				echo"<th><font color='black'>Address</font></th>";
			//	echo"<td><font color='black'>phone_number</font></td>";
			//	echo"<td><font color='black'>email</font></td>";	
			//	echo"<td><font color='black'>password</font></td>";	
			//	echo"<td><font color='black'>blood_group</font></td>";	
				echo"<th><font color='black'>Profile</font></th>";
		  echo "</tr>";
			
			while($test =  mysqli_fetch_assoc($result))
			{
				$id = $test['id'];	
				echo "<tr align='center'>";	
			//	echo"<td><font color='black'>" .$test['id']."</font></td>";
				echo"<td><font color='black'>" .$test['name']."</font></td>";
				echo"<td><font color='black'>". $test['address']. "</font></td>";
			//	echo"<td><font color='black'>". $test['phone_number']. "</font></td>";
			//	echo"<td><font color='black'>". $test['email']. "</font></td>";	
			//	echo"<td><font color='black'>". $test['password']. "</font></td>";	
			//	echo"<td><font color='black'>". $test['blood_group']. "</font></td>";				
				echo"<td> <a href ='index.php?id=$id'><center>View</center></a>";
			
									
				echo "</tr>";
			}
			
			mysqli_close($conn);
		
     
    }
?>
  
<?php



  echo "<br><br><br>If you want to go main page please click on <a href ='my loc to destination side by side.php'>main page</a>";
    echo "<br><br><br>For registration , click on <a href ='donar.html'>Registration</a>";

  
?>


</body>
</html>
  