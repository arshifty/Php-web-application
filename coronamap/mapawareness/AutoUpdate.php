

<?php 
  
// Demonstrate the use of header() function 
// to refresh the current page 
   
echo "Welcome to index page</br>"; 
echo "Page will refresh in every 50 seconds</br></br>"; 
    
// The function will refresh the page  
// in every 3 second 
header("refresh: 50"); 
    
echo date('H:i:s Y-m-d'); 
  

?> 



<?php
session_start();
?>



<html>
 
   <body>
         
         <?php
                    
            if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
				
				
				$address = $_POST['username'];
				$type=$_POST['password'];
				
				
$connection=mysqli_connect ('localhost', 'root', '');
if (!$connection) {  die('Not connected : ' . mysqli_error());}



$db_selected = mysqli_select_db( $connection,'maps');
if (!$db_selected) {
  die ('Can\'t use db : ' . mysqli_error());
}



$query = "SELECT * FROM markers WHERE address ='$address'";
$result = mysqli_query($connection,$query);

if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) 
	{
         echo "address: " . $row["address"]. "  -type " . $row["type"]. "<br>";
    
	     $_SESSION['add'] = $row["address"];
	     $address2 = $_SESSION['add'];
		 
		 $_SESSION['ty'] = $row["type"];
		 $type2 = $_SESSION['ty'];
		 
		 echo "In session  address: " . $_SESSION['add']. "  -type " . $_SESSION['ty']. "<br>";
		 
		 
		 if (  ($address2==$address )  && ($type2==$type) ) {
			 
			 header("Location: autohome.php");
               
                 } 
	else {
    header("Location: AutoUpdate.php");
           }
		 
	
	
	}
                 } else {
							echo "0 results";
						}


			if (!$result) {
			  die('Invalid query: ' . mysqli_error());
			  
			}
			
			
			
			

 }
         ?>

      
  
      
         <form action = "" method = "post">	
            
            <input type = "text"  name = "username" placeholder = "username = tutorialspoint"   required></br>			   
            <input type = "text"  name = "password" placeholder = "password = 1234" required>   </br>	        
		   <button  type = "submit"   name = "login">Login</button>
		   
         </form>
			
         Click here to clean <a href = "logout.php" tite = "Logout">Session.
         
     
      
   </body>
</html>