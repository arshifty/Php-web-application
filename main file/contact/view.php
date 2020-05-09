<html>
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>



#header
{
float:left;
padding :5px;
margin-right:40px;
margin-left: 20px;
}


#inser
{
align:left;
margin-left: 20px;
}

</style>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>



<body>



<div id ="header">
    <a href="http://hospitalseba.com/">Home Page</a>
<form method="post">
<table border="0">
<tr >   
<td  id="size6" class="SearchBar"> 
<input type="text" name="pin"  placeholder="Search contact number"   />  </td>
<td id="size10">  <input type="submit" value="search" name="search" />    </td>
</tr>


</table>

<br>


<table border="1" align="left" cellpadding="5">

			<?php
			
			if(isset($_POST['search']))
          {	
			
			    include("db.php");
				
				  $pinno=$_POST['pin'] ;
			
				$sql = "SELECT * FROM contactinfo WHERE number = '$pinno'";
                $result = mysqli_query($connection, $sql);
			
			
				echo "<tr align='center' >";	
				echo"<td><font color='black'>id</font></td>";
				echo"<td><font color='black'>Quarantine</font></td>";
				echo"<td><font color='black'>Doctor</font></td>";
				echo"<td><font color='black'>Number</font></td>";
				echo"<td><font color='black'>Work Time</font></td>";	
				echo"<td> Edit";
				echo"<td> Delete";									
				echo "</tr>";
			
			
			while($test =  mysqli_fetch_assoc($result))
			{
				$pinno = $test['id'];	
				echo "<tr align='center'  >";	
				echo"<td><font color='black'>" .$test['id']."</font></td>";
				echo"<td><font color='black'>" .$test['quarantine']."</font></td>";
				echo"<td><font color='black'>". $test['doctor']. "</font></td>";
				echo"<td><font color='black'>". $test['number']. "</font></td>";
				echo"<td><font color='black'>". $test['worktime']. "</font></td>";	

				echo"<td> <a href ='edit.php?pinno=$pinno'>Edit</a>";
				echo"<td> <a href ='delete.php?pinno=$pinno'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysqli_close($connection);
			
			}
			
			?>
			</table>

</form>

</div>

<div  id="inser">
<h3> Insert Contact info </h3>
	<div  id="success">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<form id="fupForm" name="form1" method="post">
		
		<table>
		
		<tr>
		<td> test/army/Quarantine Name </td>
		<td>:</td>
		<td> <input type="text"  id="quarantine" placeholder="Quarantine Name " name="quarantine"> </td>
		</tr>
		
		<tr>
		<td>Doctor/hotline Name  </td>
		<td> : </td>
		<td><input type="text"  id="doctor" placeholder="Doctor Name" name="doctor"></td>
		</tr>
		
		<tr>
		<td>Contact</td>
		<td> : </td>
		<td> <input type="text"  id="number" placeholder="Contact" name="number"> </td>
		</tr>
		
		<tr>
		<td>Work time </td>
		<td> : </td>
		<td> <input type="text"  id="worktime" placeholder="Work Time" name="worktime">	 </td>
		
		</tr>
		
			<tr>
			<td>  </td>
			<td>  </td>
			<td><input type="button" name="save" class="btn btn-primary" value="Save to database" id="butsave">  </td>
			</tr>
		
		
	</form>
</div>


<script>
$(document).ready(function() {
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var quarantine = $('#quarantine').val();
		var doctor = $('#doctor').val();
		var number = $('#number').val();
		var worktime = $('#worktime').val();
		if(quarantine!="" || doctor!="" && number!="" && worktime!=""){
			$.ajax({
				url: "save.php",
				type: "POST",
				data: {
					quarantine: quarantine,
					doctor: doctor,
					number: number,
					worktime: worktime				
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Data added successfully !'); 	
                        location.reload();
                     
						
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});
</script>



<div id="lul">
<table border="1">

<tr>
<td colspan="9" align="center"> <h2>Contact Information</h2>  </td>

<tr>
	
			<?php
			include("db.php");
			
				$sql = "SELECT * FROM contactinfo ORDER BY id DESC";
                $result = mysqli_query($connection, $sql);
			
			
				echo "<tr align='center' >";	
				echo"<td><font color='black'>id</font></td>";
				echo"<td><font color='black'>Quarantine</font></td>";
				echo"<td><font color='black'>Doctor</font></td>";
				echo"<td><font color='black'>Number</font></td>";
				echo"<td><font color='black'>Work Time</font></td>";	
				echo"<td> Edit";
				echo"<td> Delete";									
				echo "</tr>";
			
			
			while($test =  mysqli_fetch_assoc($result))
			{
				$pinno = $test['id'];	
				echo "<tr align='center'  >";	
				echo"<td><font color='black'>" .$test['id']."</font></td>";
				echo"<td><font color='black'>" .$test['quarantine']."</font></td>";
				echo"<td><font color='black'>". $test['doctor']. "</font></td>";
				echo"<td><font color='black'>". $test['number']. "</font></td>";
				echo"<td><font color='black'>". $test['worktime']. "</font></td>";	

				echo"<td> <a href ='edit.php?pinno=$pinno'>Edit</a>";
				echo"<td> <a href ='delete.php?pinno=$pinno'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysqli_close($connection);
			?>
</table>
</div>


</body>

</html>