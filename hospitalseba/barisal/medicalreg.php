
<html>
<head>

<meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body background="background/a.jpg" > 

 
 <p align="justify">  সঠিক তথ্য দিন । কোন দরকার হলে  please contact with me <a href ="about.php"> About developer </a>
 </p>
 
 <h2>Hospital Registration form </h2>
 
 
<form method="POST" action="" enctype="multipart/form-data">
 
 <table>
  
  <tr>
		  <td> হাসপাতাল নাম   </td>
		  <td> <input type="text" name="name" placeholder="Enter your name "  size="25" required />  </td>
  </tr>
  
   
  
   <tr>
		  <td>  ঠিকানা   </td>
		  <td> <textarea rows="6" cols="25" name="address" > </textarea>  </td>
  </tr>
  
   <tr>
		  <td>  মোবাইল নাম্বার  </td>
		  <td> <input type="number" name="contact" placeholder="Enter your contact number "  size="25" required />  </td>
  </tr>
  
   <tr>
		  <td>  রেজিস্ট্রেশান তারিখ   </td>
		  <td> <input type="date" name="date"   size="25" required />  </td>
  </tr>
  
   <tr>
		  <td>  অ্যাম্বুলেন্স   নাম্বার </td>
		  <td> <input type="number" name="amb1" placeholder="00000000000"  size="25" />  </td>
  </tr>
  
     <tr>
		  <td>  অ্যাম্বুলেন্স   নাম্বার </td>
		  <td> <input type="number" name="amb2" placeholder="00000000000"  size="25" />  </td>
    </tr>
  
      
		
				  <tr>
		  <td>  সেবা সমূহ </td>
          <td> <textarea rows="6" cols="25" name="doctor1" > </textarea>  </td>
                </tr>
				


		
		         <tr>
		  <td>  অনলাইন ডাক্তার  </td>
          <td> <textarea rows="6" cols="25" name="onlinetrt" > null .</textarea>  </td>
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
					$contact = $_POST['contact'] ;	
					$date = $_POST['date'] ;
					
					$amb1 = $_POST['amb1'] ;	
					$amb2 = $_POST['amb2'] ;	
					
					
					$doctor1 = $_POST['doctor1'] ;	
					
					
					
					$onlinetrt = $_POST['onlinetrt'] ;
				
					$password = $_POST['password'] ;	
										
					
					
					
			

   $sql = "INSERT INTO shifty_medical (name,address,contact,date,amb1,amb2,doctor1,onlinetrt,password)
   VALUES ('$name','$address','$contact','$date','$amb1','$amb2','$doctor1','$onlinetrt','$password')";

    $result = mysqli_query($conn, $sql);
	
   if($result==TRUE){
	   
	  echo "<script>
						alert('Registration Successful');
						window.location.href='medical.php';
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