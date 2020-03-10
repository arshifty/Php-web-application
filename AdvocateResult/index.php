
<html>
<head> 

<style>

#text1
{

background:#acb125;
margin-top:5%;
margin-left:40%;
padding:1%;
width:20%
}

</style>
 
</head>



<body>

<h1 align="center"> Welcome  Home  </h1>



<div id = "text1">


<form method="post">

<h4 align="center"> Login form </h4>
<table>



<tr>
<td>Pin no   </td>
<td></td>
<td><input type="password" name="pinno" >  </td>
</tr>

<tr>
<td>Contact No   </td>
<td></td>
<td><input type="password" name="contact" >  </td>
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
				
				$pinno2=$_POST['pinno'] ;
				$contact2=$_POST['contact'] ;
			
				$sql = "SELECT * FROM user WHERE contact = '45654'";
                $result = mysqli_query($conn, $sql);
			
			
	
			
			
			while($test =  mysqli_fetch_assoc($result))
			{
				$contact1 = $test['contact'];
				$pinno1 = $test['pinno'];
                 if($contact1==$contact2  && $pinno1==$pinno2 )	
					{
					
					header("Location: view.php");		
	           
					}		
                  else
						{
                       echo "Wrong password or pin number";
						}				  
				
			
				
			}
			mysqli_close($conn);
			
			}			
			?>
			<br><br><br>
			<h4 align="center"> <a href ='registration.php'> Account  Registration form</a> </h4>

</div>






</body>

</html>