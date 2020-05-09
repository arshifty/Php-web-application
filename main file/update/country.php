<?php
require("db.php");


                 $sql = "SELECT * FROM country";
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
					$tt=$test['tt'] ;
					$dd=$test['dd'] ;
					$ss=$test['ss'] ;
					
		
		
		
				

if(isset($_POST['save']))
{	

                    $ii = $_POST['ii'] ;
	                $q=$_POST['q'] ;
					$d= $_POST['d'] ;					
					$n=$_POST['n'] ;					
					$w=$_POST['w'] ;
					
					$tt=$_POST['tt'] ;
					$dd=$_POST['dd'] ;
					$ss=$_POST['ss'] ;

	$sql = "UPDATE country SET total ='$q', death ='$d',recover ='$n', active ='$w'  , tt ='$tt'  , dd ='$dd'  , ss ='$ss' WHERE id = '$ii'";

		if (mysqli_query($connection,$sql)) {
			 
	header("Location: country.php");	
		} else {
			echo "Error updating record: " . $connection->error;
		}
	
		
		
}
mysqli_close($connection);
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>country update</title>

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
<h3>Country info update   </h3>
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
		<td>total today:</td>
		<td><input type="text"  name="tt"   value="<?php echo $tt ?> "  /></td>
	</tr>
	
	<tr>
		<td>death today:</td>
		<td><input type="text"  name="dd"   value="<?php echo $dd ?> "  /></td>
	</tr>
	
	<tr>
		<td>Recover today:</td>
		<td><input type="text"  name="ss"   value="<?php echo $ss ?> "  /></td>
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
