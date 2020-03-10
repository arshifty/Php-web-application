<?php
require("db.php");
$contact1 =$_REQUEST['contact1'];

                 $sql = "SELECT * FROM shifty_ambulence WHERE contact1  = '$contact1'";
                 $result = mysqli_query($conn, $sql);


$test = mysqli_fetch_assoc($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		
		           
		
		          
					$name= $test['name'] ;					
								
					
					$address= $test['address'] ;					
					$contact1=$test['contact1'] ;
					$contact2=$test['contact2'] ;
					$contact3=$test['contact3'] ;
					
					$password=$test['password'] ;
					
		
		
				

if(isset($_POST['save']))
{	
	              
					$name = $_POST['name'] ;					
					
					$address = $_POST['address'] ;	
					$contact1 = $_POST['contact1'] ;	
					$contact2 = $_POST['contact2'] ;
					$contact3 = $_POST['contact3'] ;					
					$password = $_POST['password'] ;	
					
				    $contact1 = (string)$contact1;

							

	$sql = "UPDATE shifty_ambulence SET name ='$name',
		
		 address ='$address',contact1 ='$contact1',contact2 ='$contact2',contact3 ='$contact3',password ='$password'
		 WHERE contact1 = '$contact1'";

		if (mysqli_query($conn,$sql)) {
			 echo "Updated successfully<br><br>";
	echo"<a href='../index.php'>Home Page </a> <br><br> <a href='index_kurigram.php'>Kurigram Home Page </a>";
		} else {
			echo "Error updating record: " . $conn->error;
		}
	
		
		
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width,initial-scale=1">

<title>Update data</title>
</head>

<body background="" >
<br>
<h2>Update your information.</h2>
<form  method="post">
<table cellspacing="20" cellpadding="5">
	
	<tr>
		<td>Name</td>
		<td><input type="text" name="name"  value="<?php echo $name ?>"/></td>
	</tr>
	
	
	
	
	<tr>
		<td>Address</td>
		<td><input type="text" name="address"  value="<?php echo $address ?>"/></td>
	</tr>
	
	<tr>
		<td>Contact 1</td>
		<td><input type="text" name="contact1"  value="<?php echo $contact1 ?>" readonly /></td>
	</tr>
	
		<tr>
		<td>Contact 2</td>
		<td><input type="text" name="contact2"  value="<?php echo $contact2 ?>"/></td>
	</tr>
	
		<tr>
		<td>Contact 3</td>
		<td><input type="text" name="contact3"  value="<?php echo $contact3 ?>"/></td>
	</tr>
	
	
		
				<tr>
		<td> Password </td>
		<td><input type="text" name="password"  value="<?php echo $password ?>" /></td>
	    </tr>
		
				
		
	
	<tr>
		<td></td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>
</form>

</body>
</html>
