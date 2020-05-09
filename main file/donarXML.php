<html>
    <head>
        
   <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    
<body>


<?php

include 'db.php';



$a = $_GET["name"];
$b = $_GET["address"];
$c = $_GET["lat"];
$d = $_GET["lng"];
$e = $_GET["type"];
$g = $_GET["afridi"];


$sql = "INSERT INTO markers (name, address, lat,lng,type,category)
VALUES ('$a', '$b', '$c','$d','$e','$g')";

if (mysqli_query($connection, $sql)) {
	
    echo "New record created successfully <br> <br>";
	echo "<a href='index.php'>Home Page</a> <br>";
	echo "<a href='donar.html'> Registration Page</a>";
	
	
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>
</body>
</html>