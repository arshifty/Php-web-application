<?php
require("db.php");
$pinno =$_REQUEST['pinno'];

                 $sql = "SELECT * FROM user WHERE pinno  = '$pinno'";
                 $result = mysqli_query($conn, $sql);


$test = mysqli_fetch_assoc($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		
		           
		
		            $pinno=$test['pinno'] ;
					$date= $test['date'] ;					
					$name=$test['name'] ;					
					$designation=$test['designation'] ;
					$address= $test['address'] ;					
					$contact=$test['contact'] ;
					$distributor=$test['distributor'] ; 
		
		
		
				

if(isset($_POST['save']))
{	
	                $pinno=$_POST['pinno'] ;
					$date= $_POST['date'] ;					
					$name=$_POST['name'] ;					
					$designation=$_POST['designation'] ;
					$address= $_POST['address'] ;					
					$contact=$_POST['contact'] ;
					$distributor=$_POST['distributor'] ;

	$sql = "UPDATE user SET pinno ='$pinno', date ='$date',
		 name ='$name',designation ='$designation',
		 address ='$address',contact ='$contact',distributor ='$distributor'
		 WHERE pinno = '$pinno'";

		if (mysqli_query($conn,$sql)) {
			 echo "Updated successfully<br>";
	echo"<a href ='index.php'>Home</a>";
		} else {
			echo "Error updating record: " . $conn->error;
		}
	
		
		
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<form  method="post">
<table cellspacing="20" cellpadding="5">
	<tr>
		<td>Pin no </td>
		<td><input type="text" name="pinno" value="<?php echo $pinno ?>"/></td>
	</tr>
	<tr>
		<td>Date</td>
		<td><input type="date" name="date"  value="<?php echo $date ?>"/></td>
	</tr>
	<tr>
		<td>Name</td>
		<td><input type="text" name="name"  value="<?php echo $name ?>"/></td>
	</tr>
	
	<tr>
		<td>Designation</td>
		<td><input type="text" name="designation" value="<?php echo $designation ?>"/></td>
	</tr>
	
	<tr>
		<td>Address</td>
		<td><input type="text" name="address"  value="<?php echo $address ?>"/></td>
	</tr>
	
	<tr>
		<td>Contact No</td>
		<td><input type="number" name="contact"  value="<?php echo $contact ?>"/></td>
	</tr>
	
		<tr>
		<td>Distributor Name</td>
		<td><input type="text" name="distributor"   value="<?php echo $distributor ?>"/></td>
	    </tr>
		
		
	
	<tr>
		<td></td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>
</form>

</body>
</html>
