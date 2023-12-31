<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carsdatabase";

$conn = new mysqli($servername, $username,'',$dbname);


if ($conn->connect_error) {
	
    die("Connection failed: " . $conn->connect_error);
}
else
{ 
//echo "Connected Database successfully";
}

?>
<!doctype html>
<html>
<head>

</head>
<body>

<h1 align="center">*************Car RECORD Print **********</h1>

<table border="1" align="center" style="line-height:25px;">
<tr>
<th>Car Number</th>
<th>Car Name</th>
<th>Engine Number</th>
<th>Mobile Number</th>
<th>Color</th>
<th>Model</th>

</tr>
<?php
$sql = "SELECT * FROM car_category";
$result = $conn->query($sql);
if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
 <tr>

<td> <?php  echo $row['carno'];?></td>
<td> <?php  echo $row['carname'];?></td>
<td> <?php  echo $row['engineno'];?></td>
<td> <?php  echo $row['mobileno'];?></td>
<td> <?php  echo $row['color'];?></td>
<td> <?php  echo $row['model'];?></td>

 </tr>
 <?php
 }
 }
 else
 {
 ?>
 <tr>
 <th colspan="2">There's No data found!!!</th>
 </tr>
 <?php
}
?>
</table>
</body>
</html>