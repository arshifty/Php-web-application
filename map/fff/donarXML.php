<html>
<body>


<?php
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


$a = $_GET["name"];
$b = $_GET["address"];
$c = $_GET["lat"];
$d = $_GET["lng"];
$e = $_GET["type"];


$sql = "INSERT INTO markers (name, address, lat,lng,type)
VALUES ('$a', '$b', '$c','$d','$e')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>