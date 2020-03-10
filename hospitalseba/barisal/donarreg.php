
<html>
<head>

<meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body background="background/a.jpg" > 
 
 <p align="justify"> Organization name অপশনে আপনার সংগঠনের নাম দিতে চাইলে  please contact with us <a href ="about.php"> About developer </a> ।
 
 
 </p>
 
 <h2>Registration form </h2>
 
 
<form method="POST" action="" enctype="multipart/form-data">
 
 <table>
  
  <tr>
		  <td>  Name  </td>
		  <td> <input type="text" name="name" placeholder="Enter your name "  size="25" required />  </td>
  </tr>
  
   <tr>
		  <td>  Blood group  </td>
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
		  <td>  Address  </td>
		  <td> <textarea rows="6" cols="25" name="address" > </textarea>  </td>
  </tr>
  
   <tr>
		  <td>  Contact  </td>
		  <td> <input type="number" name="contact" placeholder="Enter your contact number "  size="25" required />  </td>
  </tr>
  
    <tr>
		  <td>   </td>
  </tr>
  
   <tr>
		  <td>  Registration Date  </td>
		  <td> <input type="date" name="date"   size="25" required />  </td>
  </tr>
     <tr>
		  <td>   </td>
  </tr>
  

  
     <tr>
		  <td>  Present age  </td>
		  <td> <input type="number" name="age" placeholder="Enter your age "  size="25" required />  </td>
  </tr>
  
  
     <tr>
		  <td>  Organization name   </td>
		  <td> 
                <select name="club"  required>
					    <option value="General"> General</option>	
				        <option value="Rover Scouts KTI"> Rover Scouts KTI </option>
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
		  <td>  Sex  </td>
		  <td> 
                <select name="sex"  required>
					    <option value="Male"> Male </option>
					    <option value="Female"> Female</option>
					    <option value="Others"> Others</option>		
                        				
			    </select>		  

		  </td>
  </tr>
  
   <tr>
		  <td>  Password  </td>
		  <td> <input type="text" name="password" placeholder="Enter password "  size="25" required />  </td>
  </tr>
  
     <tr>
		  <td>  Donated times  </td>
		  <td> <input type="number" name="count" placeholder="How many times you donated ?  "  size="25" required />  </td>
  </tr>
  
  
  <tr>
		  <td>  <input type="submit" name="submit" value="Submit" />  </td>
		 
  </tr>
 
 </table>
</form>
 
 


</body>
</html>





<?php
//
include 'db.php';


			 	

if(isset($_POST['submit'])){


   
   	              
					$name = $_POST['name'] ;					
					$bloodgroup = $_POST['bloodgroup'] ;
					$address = $_POST['address'] ;	
					$contact = $_POST['contact'] ;	
					$date = $_POST['date'] ;			
						
					$age = $_POST['age'] ;	
					$club = $_POST['club'] ;		
					$sex = $_POST['sex'] ;	
					$password = $_POST['password'] ;	
					$count = $_POST['count'] ;					
					
					
					
			

   $sql = "INSERT INTO shifty_blood (name, bloodgroup,address,contact,date,age,club,sex,password,count)
   VALUES ('$name', '$bloodgroup','$address','$contact','$date','$age','$club','$sex','$password','$count')";

    $result = mysqli_query($conn, $sql);
	
   if($result==TRUE){
	   
	  echo "<script>
						alert('Registration Successful');
						window.location.href='blood.php';
			</script>";
   
   }
   else
   {
	    echo "<script>
	alert('something went wrong.>>>change contact number. Did you registered  the same contact number before?');
 </script>";
   }
 
}
?>