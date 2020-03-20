<html>
<body>


<?php

include 'db.php';

/*

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maps";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

*/

$a = $_GET["name"];
$b = $_GET["address"];
$c = $_GET["lat"];
$d = $_GET["lng"];
$e = $_GET["type"];
$g = $_GET["afridi"];


$sql = "INSERT INTO markers (name, address, lat,lng,type,category)
VALUES ('$a', '$b', '$c','$d','$e','$g')";

if (mysqli_query($conn, $sql)) {
	
    echo "New record created successfully <br> <br>";

	echo "<a href='index.html'>Home</a>";
	
	
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>