
<html>
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>

#text1{

	
}

</style>
 
</head>



<body>





<div id = "text1">

<form method="post">

<table align="center">


<tr>
<td>User Name </td>
<td>:</td>
<td><input type="password" name="doctor" >  </td>
</tr>

<tr>
<td>Contact No   </td>
<td>:</td>
<td><input type="password" name="number" >  </td>
</tr>

<tr>
<td></td>
<td></td>
<td><input type="submit" name="save" value="login" >  </td>
</tr>

</table>
</form>



<?php
			
		if(isset($_POST['save']))
          {	
			
			    include("db.php");
				
				$pinno2=$_POST['doctor'] ;
				$contact2=$_POST['number'] ;
			
				$sql = "SELECT * FROM contactinfo WHERE number = '01521466521'";
                $result = mysqli_query($connection, $sql);
			
			
	
			
			
			while($test =  mysqli_fetch_assoc($result))
			{
				$contact1 = $test['number'];
				$pinno1 = $test['doctor'];
                 if($contact1==$contact2  && $pinno1==$pinno2 )	
					{

				  echo " <p align='center'> password matched<br>";
					echo "<a href='view.php'> View data </a>   </p>";	
	           
					}		
                  else
						{
                       echo "<p align='center'>Wrong password or pin number</p>";
						}				  
				
			
				
			}
			mysqli_close($connection);
			
			}			
			?>
		

</div>






</body>

</html>