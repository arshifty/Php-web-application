<?php
require("db.php");
$pinno =$_REQUEST['pinno'];

                 $sql = "SELECT * FROM contactinfo WHERE id  = '$pinno'";
                 $result = mysqli_query($connection, $sql);


$test = mysqli_fetch_assoc($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		
		           
		            $id=$test['id'] ;
		            $quarantine=$test['quarantine'] ;
					$doctor= $test['doctor'] ;					
					$number=$test['number'] ;					
					$worktime=$test['worktime'] ;
					
		
		
		
				

if(isset($_POST['save']))
{	

                    $ii = $_POST['ii'] ;
	                $q=$_POST['q'] ;
					$d= $_POST['d'] ;					
					$n=$_POST['n'] ;					
					$w=$_POST['w'] ;

	$sql = "UPDATE contactinfo SET quarantine ='$q', doctor ='$d',number ='$n', worktime ='$w'  WHERE id = '$ii'";

		if (mysqli_query($connection,$sql)) {
			 
	header("Location: view.php");	
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
		<td><input type="text" name="ii" value="<?php echo $id ?>"/></td>
	</tr>

	<tr>
		<td>Quarantine  : </td>
		<td><input type="text" name="q" value="<?php echo $quarantine ?>"/></td>
	</tr>

	<tr>
		<td>Doctor :</td>
		<td><input type="text" name="d"  value="<?php echo $doctor ?>"/></td>
	</tr>
	
	<tr>
		<td>Number : </td>
		<td><input type="text" name="n" value="<?php echo $number ?>"/></td>
	</tr>
	
	<tr>
		<td>Work Time :</td>
		<td><input type="text" name="w"  value="<?php echo $worktime ?>"/></td>
	</tr>
	
	
	
	<tr>
		<td></td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>
</form>

</body>
</html>
