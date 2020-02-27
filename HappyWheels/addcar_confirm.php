<?php 
$model = $_POST['model'];
$year = $_POST['year'];
$manufacturer = $_POST['manufacturer'];
$type = $_POST['type'];
$color = $_POST['color'];
$plate = $_POST['plate'];

include'connect.php';


$sql= "INSERT INTO tblcars(Car_Model, Car_Year, Car_Make, Car_Type, Car_Color, Car_Plate_Number)
VALUES ('$model', $year, '$manufacturer', '$type', '$color', '$plate')";

$query= mysqli_query($connect,$sql) or die (mysqli_error($connect));
header("location: index.php?loadnav=cars");

?>
