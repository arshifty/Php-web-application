
<html>
<head>
<meta http-equiv="refresh" content="120">
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body background="background/a.jpg" >

<ul>
<li> <a href="medicalreg.php"> হাসপাতাল রেজিস্ট্রেশান  </a> </li>
<li> <a href="medicalupdate.php"> তথ্য আপডেট </a> </li>
<li>  <a href="index_barisal.php">বরিশাল  হোম পেজ  </a> </li>
<li> <a href="../index.php"> হোম পেজ  </a> <br> </li>
</ul>
 

 
 <hr>
<table border="0" cellspacing="4" cellpadding="2">

<tr>
<td colspan="11"><h2  style="color:blue;"> সকল হাসপাতালের তথ্য  </h2></td>

<tr>

<?php			
		
			    include("db.php");
				
				 
			
				$sql = "SELECT * FROM shifty_medical ORDER BY date DESC";
                $result = mysqli_query($conn, $sql);
			
			
						
			
			while($test =  mysqli_fetch_assoc($result))
			{	
              echo"<tr><td><b style='color:Tomato;'>Hospital information</b><hr></td></tr>";
		
				echo "<tr>";	
				echo"<td><font color='black'>Hospital Name</font></td>";				
				echo"<td><b><font color='black'>" .$test['name']."</font></b></td>  </tr>";
				
				echo"<tr><td><font color='black'>Address</font></td>";		
				echo"<td><font color='black'>". $test['address']. "</font></td> </tr>";	
				
				echo"<tr><td><font color='black'>Contact</font></td>";
				echo"<td><font color='black'>". $test['contact']. "</font></td></tr>";
                
				echo"<tr><td><font color='black'>Registration date</font></td>";
				echo"<td><font color='black'>". $test['date']. "</font></td></tr>";
				
				echo"<tr><td><font color='black'>Ambulence 1</font></td>";
			    echo"<td><font color='black'>". $test['amb1']. "</font></td></tr>";
				
				echo"<tr><td><font color='black'>Ambulence 2</font></td>";
				echo"<td><font color='black'>". $test['amb2']. "</font></td></tr>";
			
				echo"<tr><td><font color='black'>Online Doctor service </font></td>";
				echo"<td><font color='black'>". $test['onlinetrt']. "</font></td></tr>";
				
              echo"<tr><td><br></td></tr>";




				
				
				  
?>

<?php

			
			}
			mysqli_close($conn);
			
			
			
			?>
			</table>
 
 
 </body>
</html>