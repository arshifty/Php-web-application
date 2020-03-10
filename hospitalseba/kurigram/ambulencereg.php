
<html>
<head>

<meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body background="background/a.jpg" > 
 
 <p align="justify"> সঠিক তথ্য দিন । কোন দরকার হলে please contact with us <a href ="about.php"> About developer </a>
 </p>
 
 <h2>Registration form </h2>
 
 
<form method="POST" action="" enctype="multipart/form-data">
 
 <table>
  
  <tr>
		  <td>  মালিকের  নাম </td>
		  <td> <input type="text" name="name" placeholder="Ambulence driver name "  size="25" required />  </td>
  </tr>
  
  
  
   <tr>
		  <td>  ঠিকানা </td>
		  <td> <textarea rows="6" cols="25" name="address" > </textarea>  </td>
  </tr>
  
  
   <tr>
		  <td> মোবাইল নাম্বার  ১ </td>
		  <td> <input type="number" name="contact1" placeholder="Enter your contact number "  size="25" required />  </td>
   </tr>
   
      <tr>
		  <td>  মোবাইল নাম্বার  ২</td>
		  <td> <input type="number" name="contact2" placeholder="Enter your contact number "  size="25"  />  </td>
   </tr>
   
         <tr>
		  <td>  মোবাইল নাম্বার  ২ </td>
		  <td> <input type="number" name="contact3" placeholder="Enter your contact number "  size="25"  />  </td>
   </tr>
  
  <tr>
		  <td>  পাসওয়ার্ড  </td>
		  <td> <input type="text" name="password" placeholder="Enter password "  size="25" required />  </td>
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
					$address = $_POST['address'] ;	
					$contact1 = $_POST['contact1'] ;	
					$contact2 = $_POST['contact2'] ;	
					$contact3 = $_POST['contact3'] ;						
					$password = $_POST['password'] ;	
								
					
					$contact1 = (string)$contact1;
			
					
					
			

   $sql = "INSERT INTO shifty_ambulence (name,address,contact1,contact2,contact3,password)
   VALUES ('$name','$address','$contact1','$contact2','$contact3','$password')";

    $result = mysqli_query($conn, $sql);
	
   if($result==TRUE){
	   
	  echo "<script>
						alert('Registration Successful');
						window.location.href='ambulence.php';
			</script>";
   
   }
   else
   {
	    echo "<script>
	alert('something went wrong.');
 </script>";
   }
 
}
?>