<html>
   
   <head>
      <title>Login page</title>
	  <meta http-equiv="refresh" content="60">
      <meta name="viewport" content="width=device-width,initial-scale=1">
   </head>
   <body background="background/a.jpg" > 
  
              <h2>Login Form</h2>
	        
               <form action = "" method = "post">
			   <table>
			   <tr>
			   <td> Contact number    </td>
			    <td>   <input type = "number" name = "contact1" placeholder="Enter Contact number "/>  </td>			   
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


<?php
   include("db.php");
 
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
     
      
      $contact1 = mysqli_real_escape_string($conn,$_POST['contact1']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
	  
	  $contact1 = (string)$contact1;

      
      $sql = "SELECT name FROM shifty_ambulence WHERE contact1 = '$contact1' and password = '$password'";
      $result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //  $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
		  
	  echo"<big>Successful. </big>Click to <a style='color:Tomato;' href ='ambulenceedit.php?contact1=$contact1'><big>Update.</big></a><hr>";
        // header("location: view.php");
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
?>
