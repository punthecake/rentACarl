<?php 
$CarID = $_GET['CarID'];
$model = $_POST['model'];
$year = $_POST['year'];
$manufacturer = $_POST['manufacturer'];
$type = $_POST['type'];
$color = $_POST['color'];
$plate = $_POST['plate'];

include 'connect.php';


$sql= "UPDATE tblcars SET 
Car_Model='$model', 
Car_Year=$year, 
Car_Make='$manufacturer', 
Car_Type='$type', 
Car_Color='$color', 
Car_Plate_Number='$plate'
WHERE CarID=$CarID;";

$query= mysqli_query($connect,$sql) or die (mysqli_error($connect));
header("location:car.php");

?>