
<html>
<head>
<meta http-equiv="refresh" content="120">
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body background="background/a.jpg" > 

<ul>
<li> <a href="donarreg.php"> রক্তদাতার রেজিস্ট্রেশান  </a> </li>
<li> <a href="donarupdate.php"> রক্তদাতার তথ্য আপডেট  </a> </li>
<li>  <a href="index_barisal.php">বরিশাল  হোম পেজ  </a> </li>
<li> <a href="../index.php"> হোম পেজ  </a> <br> </li>
</ul>
 
 
  
   
 <hr>
 <h2 style="color:blue;">রক্ত অনুসন্ধান করুণ</h2>
 <form method="post">
<table border="0" style="border: solid 2px blue">
 <tr>
		  <td>রক্তের বিভাগ  </td> 
</tr>
<tr>		  
		  <td> 
                <select name="bloodgroup"  required>
					    <option value="A(+)"> A ( + ) </option>
					    <option value="A(-)"> A ( - )</option>
					    <option value="B(+)"> B ( + )</option>		
                        <option value="B(-)"> B ( - )</option>
					    <option value="AB(+)"> AB ( + )</option>
					    <option value="AB(-)"> AB ( - )</option>	
                        <option value="O(+)"> O ( + )</option>	
						<option value="0(-)"> O ( - )</option>							
			    </select>		  

		  </td>
		  
			<td>  <input type="submit" value="search blood" name="search"/>    </td>
  </tr>
  
  </table>
  </form>
  
  <form method="post">
<table border="0" style="border: solid 2px red">
  
  <tr>
 <td>  সংগঠন  </td>
 
 </tr>
 <tr>
		  <td> 
                <select name="club"  required>
				        <option value="General"> General</option>					        
					    <option value="Badhan"> Badhan </option>
					    <option value="Sandhani"> Sandhani</option>
					    <option value="Red Crescent Society"> Red Crescent Society</option>		
                        <option value="Medicine Club"> Medicine Club</option>
					    <option value="Bangladesh Blood Services"> Bangladesh Blood Services</option>
					    <option value="Charpoka Blood Bank"> Charpoka Blood Bank</option>	                       
						<option value="College Students">College Students</option>		
                        <option value="Medical/University"> Medical / University</option>							
			    </select>		  

		  </td>
	
		  
		  
		
		
		     <td>  <input type="submit" value="search club" name="searchclub"/>    </td>
         </tr>


          </table>
		  </form>
		  
		   <form method="post">
<table border="0" style="border: solid 3px orange">
		  
		  
		  <tr>
		  <td>রক্তের বিভাগ  </td> 
</tr>
<tr>		  
		  <td> 
                <select name="bloodgroup"  required>
					    <option value="A(+)"> A ( + ) </option>
					    <option value="A(-)"> A ( - )</option>
					    <option value="B(+)"> B ( + )</option>		
                        <option value="B(-)"> B ( - )</option>
					    <option value="AB(+)"> AB ( + )</option>
					    <option value="AB(-)"> AB ( - )</option>	
                        <option value="O(+)"> O ( + )</option>	
						<option value="0(-)"> O ( - )</option>							
			    </select>		  

		  </td>
		    </tr> 
			
    <tr>
		     <td>  +   </td>
   </tr>
  
  <tr>
 <td>  সংগঠন  </td>
 
 </tr>
 <tr>
		  <td> 
                <select name="club"  required>
					    <option value="General"> General</option>				     
					    <option value="Badhan"> Badhan </option>
					    <option value="Sandhani"> Sandhani</option>
					    <option value="Red Crescent Society"> Red Crescent Society</option>		
                        <option value="Medicine Club"> Medicine Club</option>
					    <option value="Bangladesh Blood Services"> Bangladesh Blood Services</option>
					    <option value="Charpoka Blood Bank"> Charpoka Blood Bank</option>	                       
						<option value="College Students">College Students</option>		
                        <option value="Medical/University"> Medical / University</option>							
			    </select>		  

		  </td>
		  </tr>
		  
		  
		
		  <tr>
		     <td>  <input type="submit" value="search club" name="searchboth"/>    </td>
         </tr>


</table>

</form>
<hr>


<table border="1" cellpadding="3">

			<?php
			
			if(isset($_POST['search']))
          {	
			
			    include("db.php");
				
				  $bloodgroup=$_POST['bloodgroup'] ;
			
				$sql = "SELECT * FROM shifty_blood WHERE bloodgroup = '$bloodgroup' ORDER BY date DESC";
                $result = mysqli_query($conn, $sql);
			
			
				echo "<tr align='center' >";	
				echo"<td><font color='black'>Name</font></td>";
				echo"<td><font color='black'>Blood</font></td>";				
				echo"<td><font color='black'>Address</font></td>";	
				echo"<td><font color='black'>Contact</font></td>"; 				
				echo"<td><font color='black'>Age</font></td>";				
				echo"<td><font color='black'>Organization</font></td>";               
				 echo"<td><font color='black'>given</font></td>";
				echo "</tr>";			
			
			while($test =  mysqli_fetch_assoc($result))
			{				
				echo "<tr align='center'  >";					
				echo"<td><font color='black'>" .$test['name']."</font></td>";
				echo"<td><font color='black'>". $test['bloodgroup']. "</font></td>";				
				echo"<td><font color='black'>". $test['address']. "</font></td>";	
				echo"<td><font color='black'>". $test['contact']. "</font></td>";

				
				echo"<td><font color='black'>". $test['age']. "</font></td>";				
				echo"<td><font color='black'>". $test['club']. "</font></td>";	
			
                echo"<td><font color='black'>". $test['count']. "</font></td>";
				  
?>

<?php

				echo "</tr>";
			}
			mysqli_close($conn);
			
			}
			
			?>
			</table>







<table border="1">

			<?php
			
			if(isset($_POST['searchclub']))
          {	
			
			    include("db.php");
				
				  $club=$_POST['club'] ;
			
				$sql = "SELECT * FROM shifty_blood WHERE club = '$club' ORDER BY date DESC";
                $result = mysqli_query($conn, $sql);
			
			
				echo "<tr align='center' >";	
				
				echo"<td><font color='black'>Name</font></td>";
				echo"<td><font color='black'>Blood</font></td>";				
				echo"<td><font color='black'>Address</font></td>";	
				echo"<td><font color='black'>Contact</font></td>"; 				
				echo"<td><font color='black'>Age</font></td>";				
				echo"<td><font color='black'>Organization</font></td>";               
				 echo"<td><font color='black'>given</font></td>";
				echo "</tr>";			
			
			while($test =  mysqli_fetch_assoc($result))
			{				
				echo "<tr align='center'  >";					
				echo"<td><font color='black'>" .$test['name']."</font></td>";
				echo"<td><font color='black'>". $test['bloodgroup']. "</font></td>";				
				echo"<td><font color='black'>". $test['address']. "</font></td>";	
				echo"<td><font color='black'>". $test['contact']. "</font></td>";

				
				echo"<td><font color='black'>". $test['age']. "</font></td>";				
				echo"<td><font color='black'>". $test['club']. "</font></td>";	
			
                echo"<td><font color='black'>". $test['count']. "</font></td>";
				  
?>

<?php

				echo "</tr>";
			}
			mysqli_close($conn);
			
			}
			
			?>
			</table>
			
			
			
<table border="1">

			<?php
			
			if(isset($_POST['searchboth']))
          {	
			
			    include("db.php");
				
				  $bloodgroup=$_POST['bloodgroup'] ;
				  $club=$_POST['club'] ;
			
				$sql = "SELECT * FROM shifty_blood WHERE bloodgroup = '$bloodgroup' AND club ='$club' ORDER BY date DESC";
                $result = mysqli_query($conn, $sql);
			
			
				echo "<tr align='center' >";	
				
				echo"<td><font color='black'>Name</font></td>";
				echo"<td><font color='black'>Blood</font></td>";				
				echo"<td><font color='black'>Address</font></td>";	
				echo"<td><font color='black'>Contact</font></td>"; 				
				echo"<td><font color='black'>Age</font></td>";				
				echo"<td><font color='black'>Organization</font></td>";               
				 echo"<td><font color='black'>given</font></td>";
				echo "</tr>";			
			
			while($test =  mysqli_fetch_assoc($result))
			{				
				echo "<tr align='center'  >";					
				echo"<td><font color='black'>" .$test['name']."</font></td>";
				echo"<td><font color='black'>". $test['bloodgroup']. "</font></td>";				
				echo"<td><font color='black'>". $test['address']. "</font></td>";	
				echo"<td><font color='black'>". $test['contact']. "</font></td>";
				echo"<td><font color='black'>". $test['age']. "</font></td>";				
				echo"<td><font color='black'>". $test['club']. "</font></td>";					
                echo"<td><font color='black'>". $test['count']. "</font></td>";
				  
?>

<?php

				echo "</tr>";
			}
			mysqli_close($conn);
			
			}
			
			?>
			</table>





<hr><br><br><br>
<table border="1" cellspacing="2" cellpadding="2">

<tr>
<td colspan="11" align="center"> <h2> সকল রক্ত দাতার তথ্য </h2>  </td>

<tr>

<?php			
		
			    include("db.php");
				
				 
			
				$sql = "SELECT * FROM shifty_blood ORDER BY date DESC";
                $result = mysqli_query($conn, $sql);
			
			
				echo "<tr align='center' >";	
				
				echo"<td><font color='black'>Name</font></td>";
				echo"<td><font color='black'>Blood</font></td>";				
				echo"<td><font color='black'>Address</font></td>";	
				echo"<td><font color='black'>Contact</font></td>"; 				
				echo"<td><font color='black'>Age</font></td>";				
				echo"<td><font color='black'>Organization</font></td>";               
				 echo"<td><font color='black'>given</font></td>";
				echo "</tr>";			
			
			while($test =  mysqli_fetch_assoc($result))
			{				
				echo "<tr align='center'  >";					
				echo"<td><font color='black'>" .$test['name']."</font></td>";
				echo"<td><font color='black'>". $test['bloodgroup']. "</font></td>";				
				echo"<td><font color='black'>". $test['address']. "</font></td>";	
				echo"<td><font color='black'>". $test['contact']. "</font></td>";				
				echo"<td><font color='black'>". $test['age']. "</font></td>";				
				echo"<td><font color='black'>". $test['club']. "</font></td>";	
			    echo"<td><font color='black'>". $test['count']. "</font></td>";
				  
?>

<?php

				echo "</tr>";
			}
			mysqli_close($conn);
			
			
			
			?>
			</table>



</body>
</html>