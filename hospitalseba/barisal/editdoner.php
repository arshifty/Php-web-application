<?php
require("db.php");
$contact =$_REQUEST['contact'];

                 $sql = "SELECT * FROM shifty_blood WHERE contact  = '$contact'";
                 $result = mysqli_query($conn, $sql);


$test = mysqli_fetch_assoc($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		
		           
		
		          
					$name= $test['name'] ;					
					$bloodgroup=$test['bloodgroup'] ;					
					
					$address= $test['address'] ;					
					$contact=$test['contact'] ;
					$date=$test['date'] ; 
					$birthday=$test['birthday'] ;
					
					$age= $test['age'] ;					
					$club=$test['club'] ;
					$sex=$test['sex'] ; 
					$password=$test['password'] ;
					$count=$test['count'] ;
		
		
		
				

if(isset($_POST['save']))
{	
	              
					$name = $_POST['name'] ;					
					$bloodgroup = $_POST['bloodgroup'] ;
					$address = $_POST['address'] ;	
					$contact = $_POST['contact'] ;	
					$date = $_POST['date'] ;			
					
					
					$age = $_POST['age'] ;	
					$club = $_POST['club'] ;		
					$sex = $_POST['sex'] ;	
					$password = $_POST['password'] ;	
					$count = $_POST['count'] ;			

	$sql = "UPDATE shifty_blood SET name ='$name',
		 bloodgroup ='$bloodgroup',
		 address ='$address',contact ='$contact',date ='$date',
		 age ='$age',club ='$club',sex ='$sex',password ='$password',count ='$count'
		 WHERE contact = '$contact'";

		if (mysqli_query($conn,$sql)) {
			 echo "Updated successfully<br>";
	echo"<a href='../index.php'>Home Page </a> <br><br> ";
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
		<td>Blood Group</td>
		<td><input type="text" name="bloodgroup"  value="<?php echo $bloodgroup ?>"/></td>
	</tr>
	
	
	
	<tr>
		<td>Address</td>
		<td><input type="text" name="address"  value="<?php echo $address ?>"/></td>
	</tr>
	
	<tr>
		<td>Contact No</td>
		<td><input type="number" name="contact"  value="<?php echo $contact ?>" readonly /></td>
	</tr>
	
		<tr>
		<td> Registration Date</td>
		<td><input type="dat" name="date"   value="<?php echo $date ?>"/></td>
	    </tr>
		
		
		
		<tr>
		<td> Age</td>
		<td><input type="number" name="age"  value="<?php echo $age ?>" /></td>
	    </tr>
		
		<tr>
		<td> Club </td>
		<td><input type="text" name="club"  value="<?php echo $club ?>" /></td>
	    </tr>
		
				<tr>
		<td> Sex </td>
		<td><input type="text" name="sex"  value="<?php echo $sex ?>" /></td>
	    </tr>
		
				<tr>
		<td> Password </td>
		<td><input type="text" name="password"  value="<?php echo $password ?>" /></td>
	    </tr>
		
				<tr>
		<td> How many times you donated ? </td>
		<td><input type="number" name="count"  value="<?php echo $count ?>" /></td>
	    </tr>
		
		
	
	<tr>
		<td></td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>
</form>

</body>
</html>
