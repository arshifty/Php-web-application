<html>
<header>  
</header>



<body>



<form  method="post">
<table cellspacing="20" cellpadding="5">
	<tr>
		<td>Pin no </td>
		<td><input type="text" name="pinno" placeholder="Enter Pin no "/></td>
	</tr>
	<tr>
		<td>Date</td>
		<td><input type="date" name="date"  /></td>
	</tr>
	<tr>
		<td>Name</td>
		<td><input type="text" name="name" placeholder="Enter Name "/></td>
	</tr>
	
	<tr>
		<td>Designation</td>
		<td><input type="text" name="designation" placeholder="Enter Designation "/></td>
	</tr>
	
	<tr>
		<td>Address</td>
		<td><input type="text" name="address" placeholder="Enter Address "/></td>
	</tr>
	
	<tr>
		<td>Contact No</td>
		<td><input type="number" name="contact" placeholder="Enter Contact Number "/></td>
	</tr>
	
		<tr>
		<td>Distributor Name</td>
		<td><input type="text" name="distributor" placeholder="Enter Distributor Name "/></td>
	    </tr>
		
		
	
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="submit" /></td>
	</tr>
</table>
</form>

<?php
if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
	
	
			 		$pinno=$_POST['pinno'] ;
					$date= $_POST['date'] ;					
					$name=$_POST['name'] ;					
					$designation=$_POST['designation'] ;
					$address= $_POST['address'] ;					
					$contact=$_POST['contact'] ;
					$distributor=$_POST['distributor'] ;
					
												
		$sql = "INSERT INTO user (pinno, date, name,designation,address,contact,distributor)
                 VALUES ('$pinno', '$date', '$name','$designation','$address','$contact','$distributor')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully<br>";
	echo"<a href ='index.php'>Home</a>";
	
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


   }
?>





</body>

</html>