<?php
  session_start();

		   $address2 = $_SESSION['add'];
		   $type2 = $_SESSION['ty'];
		   
		   ?>

<!DOCTYPE html>
<html>
<body>

<p id="demo"></p>


 <form action = "" method = "post">	
            
            <input type = "text"  name = "address3" value= "<?php echo $address2; ?>" required></br>			   
            <input type = "text"  name = "type3" value= "<?php echo $type2; ?>" required>   </br>	 

            <input type = "text"  name = "lat3"  id="lat" ></br>			   
            <input type = "text"  name = "lng3"  id="lng" >    </br>	 
			
		   <button  type = "submit"   name = "autoup">Login</button>
		   
 </form>



</body>
</html>

<script>

var lt;
var ln;

var x = document.getElementById("demo");
document.getElementById("demo").innerHTML = getLocation();

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
  
  lt = position.coords.latitude
  ln = position.coords.longitude;
  
  document.getElementById("lat").value =lt;  
  document.getElementById("lng").value =ln;
  
  window.location.href = "autohome.php?lt=" + lt + "&ln=" + ln;
  
  
}
</script>


<?php
 

		   $address2 = $_SESSION['add'];
		   $type2 = $_SESSION['ty'];
		   $lt2 = $_GET['lt'];
		   $in2 = $_GET['ln'];
		   
		   echo  $address2."  --  ".$type2."<br>";
		   
		   echo "In session autohome  address: " . $_SESSION['add']. "  -type " . $_SESSION['ty']. "<br>";
		   
		   echo "lt  : ".$lt2."<br>";
           echo "ln : ".$in2."<br>";
			
			
									$connection=mysqli_connect ('localhost', 'root', '');
									if (!$connection) {  die('Not connected : ' . mysqli_error());}



									$db_selected = mysqli_select_db( $connection,'maps');
									if (!$db_selected) {
									  die ('Can\'t use db : ' . mysqli_error());
									}
									
									
		                                     $var1 = floatval($lt2);
											  $var2 = floatval($in2);

											$sql = "UPDATE markers SET lat='$var1' , lng='$var2' WHERE address='$address2'";

											if ($connection->query($sql) === TRUE) {
												echo "Record updated successfully";
											} else {
												echo "Error updating record: " . $connection->error;
											}
													 
			
			
  
?>



