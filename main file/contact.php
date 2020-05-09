<?php
include 'db.php';
$result = mysqli_query($connection,"SELECT * FROM contactinfo order by id DESC");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Contact Info</title>
 
<style>
 table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
	
}

th 
{
	background-color:#d6fab9;
	
}

td,th{
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
	text-align:center;

}

tr:nth-child(even) {
    background-color: white;
}

</style>


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="icon" type="image/gif/png" href="aaaa.jpg">
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
<body>

  <button class="btn btn-success" style="margin-left:50%; margin-top:10px;" onclick="window.location.href = 'index.php';">  Home Page  </button>

<div class="container-fluide bg-gray">
 <p align="justify">
 <ul>
  <li> করোনা টেস্ট  করতে নাম্বার খুঁজুন   ।</li>
  <li>  ডাক্তারের সাথে পরামর্শ করতে নাম্বার খুঁজুন । </li
 </ul>

  </p>
  <hr>

<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table class="table table-hover">
  
  <tr class="text-white bg-primary">
    <td>সিরিয়াল </td>
	  <td>ডাক্তার / হটলাইন </td>
    <td> করোনা টেস্ট / আর্মি / কোয়ারেন্টাইন </td>  
     <td> নাম্বার  </td>
	  <td> সেবা দানের সময়  </td>
  </tr>
<?php
$i=1;
while($row = mysqli_fetch_array($result)) {
	
		$compare = strcmp($row["number"],"01521466521");
	
	if($compare==0)
	{
		continue;
		
	}
?>
<tr>
    <td><?php echo $i; ?></td>   
    <td><?php echo $row["doctor"]; ?></td>
	 <td><?php echo $row["quarantine"]; ?></td>
    <td><?php echo $row["number"]; ?></td>
	<td><?php echo $row["worktime"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>

</div>
 </body>
</html>