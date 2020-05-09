<?php
require("db.php");


                 $sql = "SELECT * FROM isolation";
                 $result = mysqli_query($connection, $sql);


$test = mysqli_fetch_assoc($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		
		           
		            $id=$test['id'] ;
		            $qua=$test['qua'] ;
					$quacom= $test['quacom'] ;					
					$iso=$test['iso'] ;					
					$isocom=$test['isocom'] ;
					
		
		
		
				

if(isset($_POST['save']))
{	

                    $ii = $_POST['ii'] ;
	                $q=$_POST['q'] ;
					$d= $_POST['d'] ;					
					$n=$_POST['n'] ;					
					$w=$_POST['w'] ;

	$sql = "UPDATE isolation SET qua ='$q', quacom ='$d',iso ='$n', isocom ='$w'  WHERE id = '$ii'";

		if (mysqli_query($connection,$sql)) {
			 
	header("Location: isolation.php");	
		} else {
			echo "Error updating record: " . $connection->error;
		}
	
		
		
}
mysqli_close($connection);
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>isolation update</title>

<meta name="viewport" content="width=device-width, initial-scale=1">


<style>
#ddd{
	
  text-align: center;
}

</style>



</head>

<body>

<div  id="ddd">
<p align="justify">   
<h3>isolation info update   </h3>
<a href="http://hospitalseba.com/"> Home page </a>
</p>


</div>


<br>
<br>


<form  method="post">
<table align="center">


<tr>
		<td>ID  : </td>
		<td><input type="text" name="ii" value="<?php echo $id ?>" readonly /></td>
	</tr>

	<tr>
		<td>quarantine  : </td>
		<td><input type="text"  name="q" value="<?php echo $qua ?>"/></td>
	</tr>

	<tr>
		<td>quarantine complete :</td>
		<td><input type="text"  name="d"  value="<?php echo $quacom ?>"/></td>
	</tr>
	
	<tr>
		<td>isolation : </td>
		<td><input type="text"    name="n" value="<?php echo $iso ?> "  /></td>
	</tr>
	
	<tr>
		<td>isolation complete:</td>
		<td><input type="text"  name="w"   value="<?php echo $isocom ?> "  /></td>
	</tr>
	
	
	
	<tr>
		<td></td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>
</form>





</body>
</html>
