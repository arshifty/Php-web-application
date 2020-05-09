<html>
<head>  
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>



</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>



<body>

  <button class="btn btn-success" style="margin-left:50%; margin-top:10px;" onclick="window.location.href = 'index.php';">  Home Page  </button>



<div class="container">
<table class="table text-center bg-light">



<tr>
	
			<?php
			include("db.php");
			
				$sql = "SELECT * FROM markers where category='Affected area' order by address DESC";
                $result = mysqli_query($connection, $sql);
			
			
				echo "<tr align='center' >";	
				echo"<td><font color='black'>id</font></td>";
				echo"<td><font color='black'>Info </font></td>";
				echo"<td><font color='black'>division </font></td>";
				echo"<td><font color='black'>District</font></td>";	
				echo"<td> Edit";							
				echo "</tr>";
			
			
			while($test =  mysqli_fetch_assoc($result))
			{
				$pinno = $test['id'];	
				echo "<tr align='center'  >";	
				echo"<td><font color='black'>" .$test['id']."</font></td>";
				echo"<td><font color='black'>" .$test['name']."</font></td>";
				echo"<td><font color='black'>" .$test['address']."</font></td>";
				echo"<td><font color='black'>". $test['type']. "</font></td>";				

				echo"<td> <a href ='upedit.php?pinno=$pinno'>Edit</a>";
			
									
				echo "</tr>";
			}
			mysqli_close($connection);
			?>
</table>
</div>


</body>

</html>