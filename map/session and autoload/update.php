

<?php 
  
// Demonstrate the use of header() function 
// to refresh the current page 
   
echo "Welcome to index page</br>"; 
echo "Page will refresh in every 3 seconds</br></br>"; 
    
// The function will refresh the page  
// in every 3 second 
header("refresh: 20"); 
    
echo date('H:i:s Y-m-d'); 
  

?> 


Live Demo
<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>Tutorialspoint.com</title>
     
      
  
      
   </head>
	
   <body>
      
      <h2>Enter Username and Password</h2> 
   
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'tutorialspoint' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';
				  
				  $str = $_SESSION['username'];
                  
				  echo $str;
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>

      
  
      
         <form  role = "form"    action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);      ?>" method = "post">
			
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
			
            <input type = "text"       name = "username" placeholder = "username = tutorialspoint" 
               required autofocus></br>
			   
            <input type = "password"          name = "password" placeholder = "password = 1234" required>
           
		   <button  type = "submit"          name = "login">Login</button>
         </form>
			
         Click here to clean <a href = "logout.php" tite = "Logout">Session.
         
     
      
   </body>
</html>