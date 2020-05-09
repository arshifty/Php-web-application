<?php
require("db.php");
$pinno =$_REQUEST['pinno'];

                 $sql = "SELECT * FROM markers WHERE id  = '$pinno'";
                 $result = mysqli_query($connection, $sql);


$test = mysqli_fetch_assoc($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		
		           
		            $id=$test['id'] ;
		            $quarantine=$test['name'] ;
					$doctor= $test['type'] ;					
					$address =  $test['address'] ;
					
		
		
		
				

if(isset($_POST['save']))
{	

                    $ii = $_POST['ii'] ;
	                $q=$_POST['q'] ;
					$d= $_POST['d'] ;		
                    $r= $_POST['r'] ;							
					

	$sql = "UPDATE markers SET name ='$q', address='$r' , type ='$d' WHERE id = '$ii'";

		if (mysqli_query($connection,$sql)) {
			 
	header("Location: up.php");	
		} else {
			echo "Error updating record: " . $connection->error;
		}
	
		
		
}
mysqli_close($connection);
?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<form  method="post">
<table align="center">


<tr>
		<td>ID  : </td>
		<td><input  readonly type="text" name="ii" value="<?php echo $id ?>"/></td>
	</tr>

	<tr>
		<td>info  : </td>
		<td><input type="text" name="q" value="<?php echo $quarantine ?>"/></td>
	</tr>
	
		

	<tr>
		<td>district :</td>
		<td><input type="text" name="d"  value="<?php echo $doctor ?>"/></td>
	</tr>
	
	<tr>
		<td>address as division  : </td>
		<td><input type="text" name="r" value="<?php echo $address ?>"/></td>
	</tr>
	

	
	
	<tr>
		<td></td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>
</form>

</body>
</html>
