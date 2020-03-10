<html>
<head>  
<style>


 #size6
	  {
	position: absolute;
	top: 6px;      
	left: 20%;
	 position: fixed;
	  }

.SearchBar input {
     height: 30px;
     width: 600px;
	 position: fixed;
}

#size10
	  {
	position: absolute;
	top: 6px;      
	left: 65%;
	position: fixed;
	
	  }
	  
	  #size4
	  {
	position: absolute;
	top: 50px;      
	left: 20%;
	position: fixed;
background:white;
	  }

#header
{
background:#ab88ef;
position: absolute;
	top: 0px;      
	width:100%;
	position: fixed;
}

</style>


</head>



<body bgcolor="lightblue">

<div id ="header">
<form method="post">
<table border="0">
<tr >   
<td  id="size6" class="SearchBar"> 
<input type="text" name="pin"  placeholder="Search by pin number"   />  </td>
<td id="size10">  <input type="submit" value="search" name="search" />    </td>
</tr>


</table>

<br><br><br><br><br>
<table border="1" id="size4" >

			<?php
			
			if(isset($_POST['search']))
          {	
			
			    include("db.php");
				
				  $pinno=$_POST['pin'] ;
			
				$sql = "SELECT * FROM user WHERE pinno = '$pinno'";
                $result = mysqli_query($conn, $sql);
			
			
				echo "<tr align='center' >";	
				echo"<td><font color='black'>pinno</font></td>";
				echo"<td><font color='black'>date</font></td>";
				echo"<td><font color='black'>name</font></td>";
				echo"<td><font color='black'>designation</font></td>";
				echo"<td><font color='black'>address</font></td>";	
				echo"<td><font color='black'>contact</font></td>";
                echo"<td><font color='black'>distributor</font></td>";
				echo"<td> Edit";
				echo"<td> Delete";									
				echo "</tr>";
			
			
			while($test =  mysqli_fetch_assoc($result))
			{
				$pinno = $test['pinno'];	
				echo "<tr align='center'  >";	
				echo"<td><font color='black'>" .$test['pinno']."</font></td>";
				echo"<td><font color='black'>" .$test['date']."</font></td>";
				echo"<td><font color='black'>". $test['name']. "</font></td>";
				echo"<td><font color='black'>". $test['designation']. "</font></td>";
				echo"<td><font color='black'>". $test['address']. "</font></td>";	
				echo"<td><font color='black'>". $test['contact']. "</font></td>";
                echo"<td><font color='black'>". $test['distributor']. "</font></td>";

				echo"<td> <a href ='edit.php?pinno=$pinno'>Edit</a>";
				echo"<td> <a href ='delete.php?pinno=$pinno'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysqli_close($conn);
			
			}
			
			?>
			</table>

</form>

</div>


<br><br><br><br><br>
<br><br>

<table border="1" cellspacing="5" cellpadding="5" align="center">

<tr>
<td colspan="9" align="center"> <h2>All Users Informations</h2>  </td>

<tr>
	
			<?php
			include("db.php");
			
				$sql = "SELECT * FROM user";
                $result = mysqli_query($conn, $sql);
			
			
				echo "<tr align='center'>";	
				echo"<td><font color='black'>pinno</font></td>";
				echo"<td><font color='black'>date</font></td>";
				echo"<td><font color='black'>name</font></td>";
				echo"<td><font color='black'>designation</font></td>";
				echo"<td><font color='black'>address</font></td>";	
				echo"<td><font color='black'>contact</font></td>";
                echo"<td><font color='black'>distributor</font></td>";
				echo"<td> Edit";
				echo"<td> Delete";									
				echo "</tr>";
			
			
			while($test =  mysqli_fetch_assoc($result))
			{
				$pinno = $test['pinno'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['pinno']."</font></td>";
				echo"<td><font color='black'>" .$test['date']."</font></td>";
				echo"<td><font color='black'>". $test['name']. "</font></td>";
				echo"<td><font color='black'>". $test['designation']. "</font></td>";
				echo"<td><font color='black'>". $test['address']. "</font></td>";	
				echo"<td><font color='black'>". $test['contact']. "</font></td>";
                echo"<td><font color='black'>". $test['distributor']. "</font></td>";

				echo"<td> <a href ='edit.php?pinno=$pinno'>Edit</a>";
				echo"<td> <a href ='delete.php?pinno=$pinno'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysqli_close($conn);
			?>
</table>

</body>

</html>