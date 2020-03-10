<html>
<body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mapdatabase";

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
$e = $_GET["phone_number"];
$f = $_GET["email"];
$g = $_GET["password"];
$h = $_GET["blood_group"];


$sql = "INSERT INTO markers (name, address, lat,lng,phone_number,email,password,blood_group)
VALUES ('$a', '$b', '$c','$d','$e','$f','$g','$h')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <a href='my loc to destination side by side.php'>Home page</a> <br> <a href='donar.html'>Home page</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>