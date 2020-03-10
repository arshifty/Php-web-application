
<html>
<head>
<meta http-equiv="refresh" content="30">
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body background="background/a.jpg" > 

<ul>
<li>  <a href="ambulencereg.php"> অ্যাম্বুলেন্স   রেজিস্ট্রেশান  </a> </li>
<li> <a href="ambulenceupdate.php"> তথ্য আপডেট </a> </li>
<li>  <a href="index_barisal.php">বরিশাল  হোম পেজ  </a> </li>
<li> <a href="../index.php"> হোম পেজ  </a> <br> </li>
</ul>


    
 
 
 <hr>
<table border="0" cellspacing="4" cellpadding="2">

<tr>
<td colspan="11"><h2  style="color:blue;">সকল অ্যাম্বুলেন্স  তথ্য  </h2></td>

<tr>

<?php			
		
			    include("db.php");
				
				 
			
				$sql = "SELECT * FROM shifty_ambulence";
                $result = mysqli_query($conn, $sql);
			
			
						
			
			while($test =  mysqli_fetch_assoc($result))
			{	
              echo"<tr><td><b style='color:Tomato;'>Ambulence information</b><hr></td></tr>";
		
				echo "<tr>";	
				echo"<td><font color='black'>Driver Name</font></td>";				
				echo"<td><b><font color='black'>" .$test['name']."</font></b></td>  </tr>";
				
				echo"<tr><td><font color='black'>Address</font></td>";		
				echo"<td><font color='black'>". $test['address']. "</font></td> </tr>";	
				
				echo"<tr><td><font color='black'>Contact 1</font></td>";
				echo"<td><font color='black'>". $test['contact1']. "</font></td></tr>";
                
				echo"<tr><td><font color='black'>Contact 2</font></td>";
				echo"<td><font color='black'>". $test['contact2']. "</font></td></tr>";
                
				echo"<tr><td><font color='black'>Contact 3</font></td>";
				echo"<td><font color='black'>". $test['contact3']. "</font></td></tr>";
                
			
				
				
				
				
              echo"<tr><td><br></td></tr>";




				
				
				  
?>

<?php

			
			}
			mysqli_close($conn);
			
			
			
			?>
			</table>
 
 
 </body>
</html>