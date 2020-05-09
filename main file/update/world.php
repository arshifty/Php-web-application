<?php
require("db.php");


                 $sql = "SELECT * FROM world";
                 $result = mysqli_query($connection, $sql);


$test = mysqli_fetch_assoc($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		
		           
		            $id=$test['id'] ;
		            $total=$test['total'] ;
					$death= $test['death'] ;					
					$recover=$test['recover'] ;					
					$active=$test['active'] ;
					
		
		
		
				

if(isset($_POST['save']))
{	

                    $ii = $_POST['ii'] ;
	                $q=$_POST['q'] ;
					$d= $_POST['d'] ;					
					$n=$_POST['n'] ;					
					$w=$_POST['w'] ;

	$sql = "UPDATE world SET total ='$q', death ='$d',recover ='$n', active ='$w'  WHERE id = '$ii'";

		if (mysqli_query($connection,$sql)) {
			 
	header("Location: world.php");	
		} else {
			echo "Error updating record: " . $connection->error;
		}
	
		
		
}
mysqli_close($connection);
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>world update</title>

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
<h3>World info update   </h3>
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
		<td>total  : </td>
		<td><input type="number" id="num1" name="q" value="<?php echo $total ?>"/></td>
	</tr>

	<tr>
		<td>deaths :</td>
		<td><input type="number" id="num2" name="d"  value="<?php echo $death ?>"/></td>
	</tr>
	
	<tr>
		<td>recover : </td>
		<td><input type="number" id="num3"   name="n" value="<?php echo $recover ?> " onkeyup="change();" /></td>
	</tr>
	
	<tr>
		<td>active:</td>
		<td><input type="number" id="num4" name="w"   value="<?php echo $active ?> "  /></td>
	</tr>
	
	
	
	<tr>
		<td></td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>
</form>



<script>

function change(){
	
	            var num1 =  document.getElementById("num1");
				var num2 =  document.getElementById("num2");
				var num3 =  document.getElementById("num3");	

                var num4 =  document.getElementById("num4");	
                num4.value= num1.value - num2.value - num3.value;				
                				
	
           //     var src= document.getElementById("sourceTextField");
           //     var dest= document.getElementById("destinationTextField");
            //    dest.value=src.value;
            }

</script>



</body>
</html>