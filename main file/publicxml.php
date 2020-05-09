<html>
    <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">

        
    </head>
    
    
<body>


<?php

include 'db.php';



$a = $_GET["address"];
$b = $_GET["district"];
$c = $_GET["category"];
$d = $_GET["reference"];



$sql = "INSERT INTO publicinfo (address, district, category,reference)
VALUES ('$a', '$b', '$c','$d')";

if (mysqli_query($connection, $sql)) {
	
 
	echo "<a href='index.php'>Home Page</a> <br>";
	echo "<a href='public.html'> Give more info </a>";
	
	
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>
</body>
</html>