<?php
require("db.php");
$contact =$_REQUEST['contact'];

                 $sql = "SELECT * FROM shifty_medical WHERE contact  = '$contact'";
                 $result = mysqli_query($conn, $sql);


$test = mysqli_fetch_assoc($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		
		           
		
		          
					$name= $test['name'] ;
					$address= $test['address'] ;					
					$contact=$test['contact'] ;
					$date=$test['date'] ;

                    $amb1 = $test['amb1'] ;	
					$amb2 = $test['amb2'] ;	
					
					
					$doctor1 = $test['doctor1'] ;	
					
					
					
					$onlinetrt = $test['onlinetrt'] ;					
					
					
					
					$password=$test['password'] ;
			
		
		
		
				

if(isset($_POST['save']))
{	
	              
					$name = $_POST['name'] ;					
					$address = $_POST['address'] ;	
					$contact = $_POST['contact'] ;	
					$date = $_POST['date'] ;
					
					$amb1 = $_POST['amb1'] ;	
					$amb2 = $_POST['amb2'] ;	
					
					$doctor1 = $_POST['doctor1'] ;
					
					$onlinetrt = $_POST['onlinetrt'] ;
				
					$password = $_POST['password'] ;		

	$sql = "UPDATE shifty_medical SET name ='$name',
		 address ='$address',contact ='$contact',date ='$date',amb1 ='$amb1',amb2 ='$amb2'
		 ,doctor1 ='$doctor1',onlinetrt ='$onlinetrt' ,password ='$password'
		 WHERE contact = '$contact'";

		if (mysqli_query($conn,$sql)) {
			 echo "Updated successfully<br>";
		echo"<a href='../index.php'>Home Page </a> <br><br> ";

		} else {
			echo "Error updating record: " . $conn->error;
		}
	
		
		
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width,initial-scale=1">

<title>Update data</title>
</head>

<body background="" >
<br>
<h2>Update your information.</h2>
<form  method="post">
<table cellspacing="20" cellpadding="5">
	
	<tr>
		<td>Name</td>
		<td><input type="text" name="name"  value="<?php echo $name ?>"/></td>
	</tr>

	
	
	
	<tr>
		<td>Address</td>
		<td><input type="text" name="address"  value="<?php echo $address ?>"/></td>
	</tr>
	
	<tr>
		<td>Contact No</td>
		<td><input type="number" name="contact"  value="<?php echo $contact ?>" readonly /></td>
	</tr>
	
		<tr>
		<td> Registration Date</td>
		<td><input type="dat" name="date"   value="<?php echo $date ?>"/></td>
	    </tr>
		
		 <tr>
		  <td>  Ambulence 1  </td>
		  <td> <input type="number" name="amb1" value="<?php echo $amb1 ?>"  size="25" />  </td>
  </tr>
  
     <tr>
		  <td>  Ambulence 2  </td>
		  <td> <input type="number" name="amb2" value="<?php echo $amb2 ?>"  size="25" />  </td>
  </tr>
  
    
		
		
				  <tr>
		  <td> Services  </td>
          <td> <input type="text" name="doctor1" value="<?php echo $doctor1 ?>" size="60" />  </td>
                </tr>
				
			
			
		
		         <tr>
		  <td>  Online Doctor service </td>
          <td> <textarea rows="6" cols="25" name="onlinetrt" value="<?php echo $onlinetrt?>"> null .</textarea>  </td>
                </tr>
		
		
		
				<tr>
		<td> Password </td>
		<td><input type="text" name="password"  value="<?php echo $password ?>" /></td>
	    </tr>
		
				
		
	
	<tr>
		<td></td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>
</form>

</body>
</html>
