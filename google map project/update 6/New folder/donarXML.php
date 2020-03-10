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
$i = $_GET["upozilla"];


$sql = "INSERT INTO markers (name, address, lat,lng,phone_number,email,password,blood_group,uozilla)
VALUES ('$a', '$b', '$c','$d','$e','$f','$g','$h','$i')";

if (mysqli_query($conn, $sql)) {
    echo "<h2>successfull</h2> <br><br><a href='my loc to destination side by side.php'>Home page</a> <br><br> <a href='donar.html'>Add Doner</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>