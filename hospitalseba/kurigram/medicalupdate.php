<?php
   include("db.php");
 
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
     
      
      $contact = mysqli_real_escape_string($conn,$_POST['contact']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT name FROM shifty_medical WHERE contact = '$contact' and password = '$password'";
      $result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //  $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {   
	  echo"Successful. <a href ='medicaledit.php?contact=$contact'>Update your information.</a>";
        // header("location: view.php");
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login page</title>
      <meta name="viewport" content="width=device-width,initial-scale=1">
   </head>
     <body >
  
              <h2>Login Form</h2>
	        
               <form action = "" method = "post">
			   <table>
			   <tr>
			   <td> Contact number    </td>
			    <td>   <input type = "number" name = "contact" placeholder="Enter Contact number "/>  </td>			   
			   </tr>
			   
			    <tr>
			   <td>  Password  :  </td>
			    <td>   <input type = "password" name = "password"  placeholder="Enter Password "/>  </td>			   
			   </tr>
                
				<tr>
			   <td> <input type = "submit" value = " Login "/><br />  </td>
			   		   
			   </tr>		  
                  
               </form>
			   
			   
			   
			 
               
 

   </body>
</html>